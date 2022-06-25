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
        <h3 class="border-bottom pb-2 mb-4">Update of the product : </h3>
        
        <div class='mt-4'>
            @if(session()->has("success"))
            <div class="alert alert-success">
                <p>{{session()->get('success')}}</p>
            </div>
            @endif
            @if($errors->any())
            <div class="alert alert-danger">

                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="post" action="{{route('product.update',['product'=>$product->id])}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="_method" value="put">

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Product</label>
                    <input type="text" class="form-control" name="nom" value="{{$product->nom}}" required>

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$product->description}}" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">alpha</label>
                    <input type="text" class="form-control" name="alphanum" value="{{$product->alphanum}}" required>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Price ($): </label>
                    <input type="number" class="form-control"  name="price" value="{{$product->price}}" required >
                </div>

                <div class="mb-3 ">
                    <label for="exampleInputPassword2" class="form-label">State 1 : </label>
                    <select class="form-control" name="state_id">
                        <option value=""></option>
                        @foreach($states as $state)
                        @if($state->id == $product->state_id)
                        <option value="{{$state->id}}" selected>{{$state->libelle}}</option>
                        @else
                        <option value="{{$state->id}}">{{$state->libelle}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>

                <div class="mb-3 ">
                    <label for="exampleInputPassword2" class="form-label">State 2 : </label>
                    <select class="form-control" name="state2_id">
                        <option value=""></option>
                        @foreach($states2 as $state2)
                        @if($state2->id == $product->state2_id)
                        <option value="{{$state2->id}}" selected>{{$state2->libelle}}</option>
                        @else
                        <option value="{{$state2->id}}">{{$state2->libelle}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                

                <div class="mb-3 ">
                    <label for="exampleInputPassword2" class="form-label">Category : </label>
                    <select class="form-control" name="category_id">
                        <option value=""></option>
                        @foreach($categories as $category)
                        @if($category->id == $product->category_id)
                        <option value="{{$category->id}}" selected>{{$category->libelle}}</option>
                        @else
                        <option value="{{$category->id}}">{{$category->libelle}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Product picture : </label>
                    <input class="form-control" type="file" id="formFile" name="picture" id="picture">
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <a href="{{route('home')}}" class="btn btn-danger">Annuler</a>
            </form>

        </div>

    </div>


</div>
@endsection