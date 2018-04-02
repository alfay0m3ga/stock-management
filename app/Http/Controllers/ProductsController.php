<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index(){
    	$products = Product::paginate(2);
    	return view('products.index', compact('products'));
    }

    public function create(){
    	return view('products.create');
    }

    public function store(){

    	$this->validate(request(), [
    		'name' => 'required',
    		'description' => 'required',
    		'price' => 'required|numeric',
    	]);
    	
    	Product::create( request(['name', 'description', 'price']) );

    	return redirect('/api/products');
    }

    public function edit($product){
    	$product = Product::Find($product);
    	return view('products.edit', compact('product'));
    }

    public function update($id){

    	$this->validate(request(), [
    		'name' => 'required',
    		'description' => 'required',
    		'price' => 'required|numeric',
    	]);

    	Product::findOrFail($id)->update( request(['name', 'description', 'price']) );

    	return redirect('/api/products');
    }

    public function destroy($id){

    	Product::Find($id)->delete();

    	return redirect('/api/products');
    }

}
