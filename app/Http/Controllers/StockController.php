<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function stock()
    {
        $stocks=Stock::where('user_id',auth()->user()->id)->with('product')->get();
//        dd($stocks);
        return view('admin.stock',compact('stocks'));
    }
}
