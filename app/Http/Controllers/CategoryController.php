<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('category/index',compact('categories'));
    }

    public function create(){
        //$category = Category::all();
        return view('category/create');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required|string|max:255'
        ]);

        Category::create($validatedData);
        return redirect()->back()->with('message','Category are created');
    }
}
