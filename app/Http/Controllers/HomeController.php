<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Picture;
use App\Models\Product;
use App\Models\State;
use Database\Seeders\CategoriesTableSeeder;
use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function index()
    {
        $products = Product::orderBy("nom", "asc")->paginate(15);
        $categories = Category::all();
        return view('home', compact('products'));
    }

    public function index1()
    {
        return view('categoryAdmin');
    }

    public function create()
    {
        $states = State::all();
        $categories = Category::all();


        return view("createProduct", compact("states","categories"));
    }

    public function store(Request $request)
    {
        $request->validate([
            "nom" => "required",
            "description" => "required",
            "price"=>"required",
            "state_id" => "required",
            "category_id" => "required",
            "picture" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
        ]);
  
        /* Store $imageName name in DATABASE from HERE */
    
       


        // dd($request->picture);
        // Product::create($request->all());
        Product::create([
            "nom"=>$request->nom,
            "description"=>$request->description,
            "price"=>$request->price,
            "state_id"=>$request->state_id,
            "category"=>$request->category_id,
            "picture"=>$request->picture,
        ]);

        return back()->with("sucess", "Product was create with success!");
    }
}
