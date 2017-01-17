<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ProductFormRequest;
use App\Product;

class ProductController extends Controller
{
    //
    public function create(){
    	return view('admin.product');
    }
    public function store(ProductFormRequest $request){
    	$product = new Product(array('name' => $request->get('name'),'sku'=>$request->get('sku')));
    	$product->save();
    	$imageName = $product->id . '.' . $request->file('image')->getClientOriginalExtension();
    	$request->file('image')->move(base_path().'/public/images/',$imageName);
    	return \Redirect::route('product',array($product->id))->with('message','Product Added');
    }
}