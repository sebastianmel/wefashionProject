<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Picture;
use App\Models\Product;
use App\Models\State;
use App\Models\State2;
use Database\Seeders\CategoriesTableSeeder;
use Illuminate\Http\Request;

class AdminController extends Controller
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
        $products = Product::orderBy("id", "asc")->paginate(15);
        $categories = Category::all();
        return view('admin', compact('products'));
    }
    

    public function index1()
    {
        $categories = Category::orderBy("libelle", "asc")->paginate(15);
        return view('categoryAdmin',compact('categories'));
    }

    public function create()
    {
        $states = State::all();
        $categories = Category::all();
        $states2 = State2::all();


        return view("createProduct", compact("states","categories","states2"));
    }

    public function create1()
    {
        $categories = Category::all();
        return view("createCategory", compact("categories"));
    }
    // Edit Function for Product & Category
    public function edit(Product $product){
        $states = State::all();
        $states2 = State2::all();
        $categories = Category::all();
        return view("editProduct", compact("states","states2","categories","product"));
    }
    public function edit1(Category $category){
        $states = State::all();
        $states2 = State2::all();
        $categories = Category::all();
        return view("editCategory", compact("states","states2","categories",'category'));
    }
 

     // Add function for products & category

    public function store(Request $request)
    {
        $request->validate([
            "nom" => "required",
            "description" => "required",
            "price"=>"required",
            "state_id" => "required",
            "category_id" => "required",
            "picture" => 'required|image|max:2048',
            "state2_id" => "required",
            "alphanum"=>"required"
        ]);
        

        $input =$request->all();

        if($picture= $request->file('picture')){
            $destinationPath = 'images/';
            $profileImage = date('YmdHis').".".$picture->getClientOriginalExtension();
            $picture->move($destinationPath,$profileImage);
            $input['picture'] = "$profileImage";
        }
        
        
        
        
        
            
            
            Product::create($input);
            return back()->with("sucess", "Product was create with success!");

        
        
        
        
    }

    public function store1(Request $request)
    {
        $request->validate([
            "libelle" => "required",
            
        ]);
    
        $product = Category::create([
                "libelle"=>$request->libelle,
                
            
            ]);
            
            
            
            return back()->with("sucess", "Category was create with success!");
            
       
    }






    // Update function for Product & Category
    
    public function update(Request $request, Product $product){
        $request->validate([
            "nom" => "required",
            "description" => "required",
            "price"=>"required",
            "state_id" => "required",
            "category_id" => "required",
            "picture" => 'required|image|max:2048',
            "state2_id" => "required",
            "alphanum"=>"required"
        ]);

        

        $product->update([
            "nom"=>$request->nom,
            "description"=>$request->description,
            "price"=>$request->price,
            "state_id"=>$request->state_id,
            "category"=>$request->category_id,
            "picture"=>$request->product->picture,
        ]);

        return back()->with('success','Product mis a jour avec succè!');
    }

    public function update1(Request $request, Category $category){
        $request->validate([
            "libelle" => "required",
            
        ]);
        

        $category->update([
            "libelle"=>$request->libelle,
        ]);

        return back()->with('success','category mis a jour avec succè!');
    }

    
    // Delete function 

    public function delete(Product $product){
        $nom_complet = $product->nom ;
        $product->delete();

        return back()->with("successDelete", "Product '$nom_complet' delete successfully!");
    }
   
    
    public function deleteCategory(Category $category){
        $nom_complet = $category->libelle;
        $category->delete();

        return back()->with("successDelete1", "Category '$nom_complet' delete successfully!");
    }
}
