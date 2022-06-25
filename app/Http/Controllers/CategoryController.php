<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Picture;
use App\Models\Product;
use App\Models\State;
use App\Models\State2;
use Database\Seeders\CategoriesTableSeeder;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    

    
    // Delete function 

   
    
    public function delete1(Category $category){
        $nom_complet = $category->libelle;
        $category->delete();

        return back()->with("successDelete", "Category '$nom_complet' delete successfully!");
    }
}
