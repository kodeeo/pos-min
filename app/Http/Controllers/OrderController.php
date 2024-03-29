<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Setting;
use Barryvdh\DomPDF\Facade as PDF;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{

    public function show($id)
    {
        $order = Order::with('customer')->where('id', $id)->first();
        //return $order;
        $order_details = OrderDetail::with('product')->where('order_id', $id)->get();
        //return $order_details;
        $company = auth()->user()->setting;
        $payments= Payment::where('order_id',$id)->get();
        return view('admin.order.order_confirmation', compact('order_details', 'order', 'company','payments'));
    }


    public function pending_order()
    {
        $pendings = Order::with('customer')->where('setting_id',auth()->user()->setting->id)->latest()->get();
        return view('admin.order.pending_orders', compact('pendings'));
    }

    public function approved_order()
    {
        $approveds = Order::latest()->with('customer')->where('setting_id',auth()->user()->setting->id)->where('order_status', 'approved')->get();
        return view('admin.order.approved_orders', compact('approveds'));
    }

    public function order_confirm($id)
    {
        $order = Order::findOrFail($id);
        $order->order_status = 'approved';
        $order->save();

        Toastr::success('Order has been Approved! Please delivery the products', 'Success');
        return redirect()->back();
    }

    public function destroy($id)
    {
        Order::findOrFail($id)->delete();
        Toastr::success('Order has been deleted', 'Success');
        return redirect()->back();
    }

    public function download($order_id)
    {
        $order = Order::with('customer')->where('id', $order_id)->first();
        //return $order;
        $order_details = OrderDetail::with('product')->where('order_id', $order_id)->get();
        //return $order_details;
        $company = Setting::latest()->first();

        set_time_limit(300);

        $pdf = PDF::loadView('admin.order.pdf', ['order'=>$order, 'order_details'=> $order_details, 'company'=> $company]);

        $content = $pdf->download()->getOriginalContent();

        Storage::put('public/pdf/'.'-'. str_pad($order->id,9,"0",STR_PAD_LEFT). '.pdf' ,$content) ;

        Toastr::success('PDF successfully saved', 'Success');
        return redirect()->back();

    }

    // for sales report
    public function today_sales()
    {
        $data = Product::with(['orderDetail'=> function ($query){
        $query->whereDate('created_at', '>=', date('Y-m-d'));}
        ])->orderBy('id','desc')->get();
        $products = [];
        foreach ($data as $key=>$item) {

            if ( $item->orderDetail->count()!=0){
                $products[]=$item;
            }
        }
        $today_date = date('Y-m-d');
        $today_expenses = Expense::where('setting_id',auth()->user()->setting->id)->whereDate('created_at', $today_date)->get();
        return view('admin.sales.today', compact('products','today_expenses'));
    }

    public function monthly_sales($month = null)
    {

        if ($month == null)
        {
            $month = date('m');
        } else {
            $month = date('m', strtotime($month));
        }
        $data = Product::with(['orderDetail'=> function ($query) use($month){
            $query->whereMonth('created_at', '=', $month);}
        ])->orderBy('id','desc')->get();
        $products = [];
        foreach ($data as $key=>$item) {

            if ( $item->orderDetail->count()!=0){
                $products[]=$item;
            }
        }

        $month_expenses = Expense::where('setting_id',auth()->user()->setting->id)->whereMonth('created_at', $month)->get();

        return view('admin.sales.month', compact('orders', 'month', 'balance','products','month_expenses'));
    }

    public function total_sales()
    {
        $balance = Order::where('setting_id',auth()->user()->setting->id)->get();

        $orders = DB::table('orders')
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->join('products', 'order_details.product_id', '=', 'products.id')
//            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->select( 'products.name AS product_name','products.image', 'order_details.*')
            ->orderBy('order_details.created_at', 'desc')
            ->where('orders.setting_id',auth()->user()->setting->id)
            ->get();

        return view('admin.sales.index', compact('balance', 'orders'));
    }

    public function payment(Request $request, $id)
    {
        $order=Order::where('id',$id)->first();
        $pay=$request->input('pay');
        $return = $order->due - $pay;

        if ($return > 0) $return = 0;

        try {
            DB::beginTransaction();
            $order->increment('pay',$pay);
            $order->decrement('due',$pay);
            if($order->due<=$pay)
            {
                $order->update(['payment_status'=>"paid"]);
            }
            Payment::create([
                'order_id' => $order->id,
                'setting_id'=>auth()->user()->setting->id,
                'method' => $request->input('method'),
                'pay' => $pay,
                'return' => $return,
                'due' => $order->due,
            ]);
            DB::commit();
            Toastr::success('Payment Updated Successfully.', 'Success!!!');
            return redirect()->back();
        }catch (\Exception $e){
            DB::rollBack();
            Toastr::error('Something went wrong !', 'Error!!!');
            return redirect()->back();
        }

    }

    public function paymentIndex()
    {
        $payments= Payment::where('setting_id',auth()->user()->setting->id)->get();

       return view('admin.payment.index',compact('payments'));
    }


}
