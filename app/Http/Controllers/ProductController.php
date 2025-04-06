<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('coffee_shop/index',compact('products'));
    }

    public function create(){
        $category = Category::all();
        return view('product/create',compact('category'));
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'cost_price' => 'required|numeric',
            'category_id'=>'required'
        ]);

        Product::create($validatedData);
        return redirect()->back()->with('message','Product are created');
    }

    public function delete($id){
        Product::where('id',$id)->firstOrFail()->delete();
        return response()->json(['success' => true]);
    }
}
