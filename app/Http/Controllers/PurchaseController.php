<?php

namespace App\Http\Controllers;

use App\Product;
use App\Purchase;
use App\Stock;
use App\Supplier;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PurchaseController extends Controller
{
    public function index()
    {
        $purchases=Purchase::where('user_id',auth()->user()->id)->with('product')->with('supplier')->orderBy('id','desc')->get();
        return view('admin.purchase.index',compact('purchases'));
    }

    public function create()
    {
        $products=Product::where('user_id',auth()->user()->id)->get();
        $suppliers=Supplier::where('user_id',auth()->user()->id)->get();

        return view('admin.purchase.create',compact('products','suppliers'));
    }

    public function store(Request $request)
    {
        $inputs = $request->except('_token');
        $rules = [
            'product_id' => 'required',
            'supplier_id' => 'required',
            'quantity' => 'required',
            'purchase_price' => 'required',
        ];

        $validation = Validator::make($inputs, $rules);
        if ($validation->fails())
        {
            return redirect()->back()->withErrors($validation)->withInput();
        }

        Purchase::create([
           'user_id'=>auth()->user()->id,
           'product_id'=>$request->product_id,
           'supplier_id'=>$request->supplier_id,
           'quantity'=>$request->quantity,
           'purchase_price'=>$request->purchase_price,
        ]);
        $stock=Stock::where('product_id',$request->product_id)->first();
        if($stock)
        {
            $stock->increment('quantity',$request->quantity);
        }else
        {
            Stock::create([
                'user_id'=>auth()->user()->id,
                'product_id'=>$request->product_id,
                'quantity'=>$request->quantity,
            ]);
        }
        Toastr::success('Stock Updated Successfully.', 'Success!!!');
        return redirect()->back();
    }
}
