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
        <h3 class="border-bottom pb-2 mb-4">Creation of your Product : </h3>

        <div class='mt-4'>

            @if(session()->has("success"))
            <div class="alert alert-success">
                <p>{{session()->get('success')}}</p>
            </div>
            @endif
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>

            <form method="post" action="{{route('product.add')}}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Product</label>
                    <input type="text" class="form-control" name="nom" required>

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Price ($): </label>
                    <input type="text" class="form-control"  name="price" >
                </div>

                <div class="mb-3 ">
                    <label for="exampleInputPassword2" class="form-label">State 1 : </label>
                    <select class="form-control" name="state_id">
                        <option value=""></option>
                        @foreach($states as $state)
                        <option value="{{$state->id}}">{{$state->libelle}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-3 ">
                    <label for="exampleInputPassword2" class="form-label">Category : </label>
                    <select class="form-control" name="category_id">
                        <option value=""></option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->libelle}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Product picture</label>
                    <input class="form-control" type="file" id="formFile" name="picture" id="picture">
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <a href="{{route('home')}}" class="btn btn-danger">Annuler</a>
            </form>

        </div>

    </div>


</div>
@endsection