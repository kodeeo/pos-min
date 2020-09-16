<?php

namespace App\Http\Controllers;

use App\Product;
use CodeItNow\BarcodeBundle\Utils\BarcodeGenerator;
use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    public function index($id , Request $request)
    {
        if ($request->input('qty')){
            $qty = $request->input('qty');
        }else{
            $qty="8";
        }
        $product= Product::find($id);
        $barcode = new BarcodeGenerator();
        $barcode->setText($product->code);
        $barcode->setType(BarcodeGenerator::Code128);
        $barcode->setScale(1);
        $barcode->setThickness(50);
        $barcode->setFontSize(10);
        $code = $barcode->generate();
        return view('admin.product.barcode',compact('code','product','qty'));

    }
}
