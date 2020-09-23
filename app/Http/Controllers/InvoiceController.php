<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderDetail;
use App\Payment;
use App\Setting;
use App\Stock;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Dompdf\Exception;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use function GuzzleHttp\Psr7\str;

class InvoiceController extends Controller
{
    public function create(Request $request)
    {
        $inputs = $request->except('_token');
//        $rules = [
//          'customer_id' => 'required | integer',
//        ];
//        $customMessages = [
//            'customer_id.required' => 'Select a Customer first!.',
//            'customer_id.integer' => 'Invalid Customer!.'
//        ];
//        $validator = Validator::make($inputs, $rules, $customMessages);
//        if ($validator->fails())
//        {
//            return redirect()->back()->withErrors($validator)->withInput();
//        }

//        $customer_id = $request->input('customer_id');
        $customer_id = 1;
        $customer = Customer::findOrFail($customer_id);
        $contents = Cart::content();
        $company = auth()->user()->setting;
        return view('admin.invoice', compact('customer', 'contents', 'company'));
    }

    public function print($customer_id)
    {
        $customer = Customer::findOrFail($customer_id);
        $contents = Cart::content();
        $company = auth()->user()->setting;
        return view('admin.print', compact('customer', 'contents', 'company'));
    }

    public function order_print($order_id)
    {
        $order = Order::with('customer')->where('id', $order_id)->first();
        //return $order;
        $order_details = OrderDetail::with('product')->where('order_id', $order_id)->get();
        //return $order_details;
        $company = auth()->user()->setting;
        return view('admin.order.print', compact('order_details', 'order', 'company'));
    }


    public function final_invoice(Request $request)
    {

        $sub_total = str_replace(',', '', Cart::subtotal());
        $tax = str_replace(',', '', Cart::tax());
        $total = str_replace(',', '', Cart::total());

        $pay = $request->input('pay');
        $customer_id = $request->input('customer_id');
        $due = $total - $pay;
        $return = $total - $pay;
        if ($return > 0) $return = 0;
        if ($due < 0) $due = 0;
        $payment_status = $total > $pay ? 'due' : 'paid';
        try {
            DB::beginTransaction();
            if ($total > $pay && $customer_id == null) {
                Toastr::error('Please Select a Customer to pay less than total !', 'error');
                return redirect()->back();
            } else {
                $order = new Order();
//        $order->customer_id = $request->input('customer_id');
                $order->payment_status = $payment_status;
                $order->setting_id=auth()->user()->setting->id;
                $order->customer_id = $customer_id;
                $order->invoice_no = Order::invoiceNumber();
                $order->pay = $pay;
                $order->return = $return;
                $order->due = $due;
                $order->order_date = date('Y-m-d');
                $order->order_status = 'success';
                $order->total_products = Cart::count();
                $order->sub_total = $sub_total;
                $order->vat = $tax;
                $order->total = $total;
                $order->save();

                $order_id = $order->id;
                $contents = Cart::content();
                foreach ($contents as $content) {
                    $order_detail = new OrderDetail();
                    $order_detail->order_id = $order_id;
                    $order_detail->product_id = $content->id;
                    $order_detail->quantity = $content->qty;
                    $order_detail->unit_cost = $content->price;
                    $order_detail->total = $content->total;
                    $order_detail->save();

                    Stock::where('product_id', $content->id)->decrement('quantity', $content->qty);
                }
                Payment::create([
                    'order_id' => $order_id,
                    'setting_id'=>auth()->user()->setting->id,
                    'method' => $request->input('method'),
                    'pay' => $pay,
                    'return' => $return,
                    'due' => $due,
                ]);
                DB::commit();
                Cart::destroy();

                Toastr::success('Invoice created successfully', 'Success');

                $order = Order::with('customer')->where('id', $order_id)->first();
                //return $order;
                $order_details = OrderDetail::with('product')->where('order_id', $order_id)->get();
                //return $order_details;
                $company = auth()->user()->setting;
                return view('admin.order.print', compact('order_details', 'order', 'company'));

            }

        } catch (Exception $e) {
            DB::rollBack();
            Toastr::error('Something went wrong !', 'Error');
        }


    }


}
