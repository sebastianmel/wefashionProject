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
            @if($errors->any())
            <div class="alert alert-danger">

                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="post" action="{{route('category.add')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Category name : </label>
                    <input type="text" class="form-control" name="libelle" required>

                </div>
               
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <a href="{{ route('categoryAdmin') }}" class="btn btn-danger">Annuler</a>
            </form>

        </div>

    </div>


</div>
@endsection