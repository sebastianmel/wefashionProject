@extends("layout.master")




@section("contenu")



<div class="album py-5 bg-light">
    <div class="container">

        <div class="">

            <div class="col">



                <section id="productTargeted">
                    <!-- image -->
                    <div class="container">
                        <img class="img" src="/images/{{$product->picture}}" alt="image">


                    </div>


                    <!-- Orders details  -->
                    <div class="details">
                    
                    
                        <p id="distributor">
                            <b style="color: hsl(155, 66%, 70%);">Style : {{$product->category->libelle}}</b>
                        </p>

                        <h1 id="modelName"><b>{{$product->nom}}</b></h1>

                        <p id="description">
                            <b>
                                {{$product->description}}

                            </b>
                        </p>

                        <!-- Price -->

                        <b class="infoPrice">
                            <span id="actualPrice"><br>Price : {{$product->price}} €</span>
                            <span id="reduction">50%</span> <br>
                            <strike>
                                20000050.00€
                            </strike><br><br>

                        </b>
                        <section class="buttonGroup"><b>

                                <!-- size -->
                                <div id="compt">

                                    <label for="inputState">Size</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>xs</option>
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                    </select>
                                </div>

                            </b>
                            <div id="addCartButtonDiv"><b>
                                    <!-- Add your article -->
                                    <button id="addCartButton" onclick="addCart()">

                                        <svg width="22" height="20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20.925 3.641H3.863L3.61.816A.896.896 0 0 0 2.717 0H.897a.896.896 0 1 0 0 1.792h1l1.031 11.483c.073.828.52 1.726 1.291 2.336C2.83 17.385 4.099 20 6.359 20c1.875 0 3.197-1.87 2.554-3.642h4.905c-.642 1.77.677 3.642 2.555 3.642a2.72 2.72 0 0 0 2.717-2.717 2.72 2.72 0 0 0-2.717-2.717H6.365c-.681 0-1.274-.41-1.53-1.009l14.321-.842a.896.896 0 0 0 .817-.677l1.821-7.283a.897.897 0 0 0-.87-1.114ZM6.358 18.208a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm10.015 0a.926.926 0 0 1 0-1.85.926.926 0 0 1 0 1.85Zm2.021-7.243-13.8.81-.57-6.341h15.753l-1.383 5.53Z" fill="#69707D" fill-rule="nonzero"></path>
                                        </svg>

                                        Add to cart

                                    </button>
                                </b>

                            </div>
                        </section>

                    </div>

                </section>



            </div>
        </div>

    </div>

</div>
</div>

@endsection