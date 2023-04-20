<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class productController extends Controller
{
    public function index(){
        return view('product.product');
        
    }
    public function addProduct(Request $request){
        //return "dklsf";
        $request->validate(
            [
                'name' => 'required|unique:products',
                'price' => 'required'
            ]
            
            );
            return "dklsf";
        
        // $product->product_name = $request->name;
        // $product->product_price = $request->price;
        // $product->save();
    }
}
