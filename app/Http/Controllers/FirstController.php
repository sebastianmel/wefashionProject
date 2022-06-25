<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Picture;
use App\Models\Product;
use App\Models\State;
use App\Models\State2;
use Database\Seeders\CategoriesTableSeeder;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */ 
    public function firstP()
    {
        
        $products = Product::orderBy("id", "asc")->paginate(6);
        $pictures = Picture::orderBy("id", "asc")->paginate(6);
        $categories = Category::all();
        return view('first', compact('products', 'pictures'));
    }

    
}
