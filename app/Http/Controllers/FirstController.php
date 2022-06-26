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
   
    
    public function productDetail(Product $product )
    {
            $id = $product->id;
        
        return view('productPage', compact('product','id'));
    }

    public function womenCategory()
    {
       
        
        $categories = Category::all();
        

        $products = Product::where('category_id', 1)
               ->orderBy("id", "asc")->paginate(6);
 
        return view('categoryFilter', compact('categories','products'));
              

    }
    public function menCategory()
    {
       
        $categories = Category::all();
        

        $products = Product::where('category_id', 2)
               ->orderBy("id", "asc")->paginate(6) ;             
               
 
        return view('categoryFilter', compact('categories','products'));
              

    }
    public function saleCategory()
    {
       
        $state2 = State2::all();
        

        $products = Product::where('state2_id', 2)
               ->orderBy("id", "asc")->paginate(6)          ;     
               
 
        return view('categoryFilter', compact('products'));
              

    }

    

    
}
