@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    <div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Products added : </h3>
    
    <div class='mt-4'>
        <div class="d-flex justify-content-between mb-2">
        {{ $products->links() }}
        <div><a href="{{route('product.create')}}" class="btn btn-primary">Add product</a></div>
        </div>
        
        @if(session()->has("successDelete")) 
        <div class="alert alert-success">
            <p>{{session()->get('successDelete')}}</p>
        </div>
        @endif
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">nom</th>
                    <th scope="col">category</th>
                    <th scope="col">price</th>
                    <th scope="col">state</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <!-- @dump($product->categories) -->
                <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td>{{$product->nom}}</td>
                    <td>{{$product->category->libelle}}</td>
                    <td>{{$product->price}} $</td>
                    <td>{{$product->state->libelle}}</td>
                    <td>
                        <a href="{{route('product.edit',['product'=>$product->id])}}" class="btn btn-info">Edit</a>
                        <a href="#" class="btn btn-danger" onclick="if(confirm('You really want to delete the product ?')){document.getElementById('form-{{$product->id}}').submit() }">Delete</a>

                        <form  id="form-{{$product->id}}" action="{{route('product.del',['product'=>$product->id])}}" method="post">
                            @csrf                          
                            <input type="hidden" name="_method" value="delete">
                        </form>

                    </td>
                </tr>
                @endforeach
              
            </tbody>
            

                
            
            
        </table>
        
    </div>
    
  </div>

    
</div>
@endsection
