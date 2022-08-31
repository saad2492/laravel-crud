<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Product;

class ProductController extends Controller
{
    public function home(){
        return view ('frontend.home');
    }

    public function addProduct(){
        return view ('frontend.addProduct');
    }

     public function productStor(Request $rqst)
    {
       $product = new Product();
       $product ->pname = $rqst->pname;
       $product ->pdes = $rqst->pdes;
       $product ->cat = $rqst->cat;
       $product ->scat = $rqst->scat;
       $product ->price = $rqst->price;
       $product ->status = $rqst->status;
       $product->save();
       return redirect()->route("showProduct");
    }

    public function showProduct(){
        $products = Product::all();
        return view("frontend.showProduct",compact("products"));
    }
    public function editproduct($productId){
        $product = Product::Find($productId);
        return view("frontend.editproduct",compact("product"));
    }
}
