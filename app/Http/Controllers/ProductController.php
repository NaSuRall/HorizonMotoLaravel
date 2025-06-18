<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('dashboard.product', compact('products'));
    }

    public function create(Request $request){

        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'ref'=> $request->input('ref'),
//            'category_id' => $request->input('category_id'),
//            'image' => $request->input('image')
        ]);
        return redirect()->route('product.show', $product )->with('success', 'Product created successfully');
    }
}
