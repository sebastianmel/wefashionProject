@extends("layout.master")




@section("contenu")

<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Fashion STORE</h1>
      <p class="lead text-muted">Discover all the new arrivals in the Spring-Summer 2022 women's ready-to-wear collection.
        Browse the items you need for your store:</p>
      <p>

        <a href="#" class="btn btn-secondary my-2">Show more</a>
      </p>
    </div>
  </div>
</section>

<div class="album py-5 bg-light">
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      @foreach($products as $product)
      <div class="col">
        <div class="card shadow-sm">

          <img class="picture" src="/images/{{$product->picture}}" alt="image">



          <div class="card-body" style="text-align: center;">
            <p class="card-text">{{$product->nom}}</p>
            <p class="card-text">Price : {{$product->price}} €</p>
            <small class="card-text">{{$product->description}}</small>

            <div class=" justify-content-between align-items-center">
              <div class="btn-group">
                <a type="button" class="btn btn-sm btn-outline-secondary" href="{{route('product.detail', ['product' => $product->id])}}">View</a>
                <button type="button" class="btn btn-sm btn-outline-secondary">Add card</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <hr>
    <div class="d-flex justify-content-center mb-2">
      {{ $products->links() }}
    </div>
  </div>
</div>

@endsection