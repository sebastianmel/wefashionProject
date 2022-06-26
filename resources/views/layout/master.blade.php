
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>WE Fashion</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
   

    

    

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');
      *{
        
        font-family: 'Nunito', sans-serif;
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      /* Add */
      #productTargeted{
    display: flex;
    justify-content: space-around;
}
.details{
    padding: 0%;
    
}
#distributor{
    color: hsl(26, 100%, 55%);
}
h1{
    
    font-size: 50px;
}
#description{
    padding-top: 30px;
    line-height:1.3em;
    width: 70%;
    color: hsl(219, 9%, 45%);
}

/* Price Part */
#actualPrice {
    padding-top: 10px;
    font-size: 30px;
}

/* Reduction */
#reduction{
    font-size: 20px;
    color: hsl(157, 66%, 77%);
    
    padding: 5px;
    border-radius: 15px;
    background-color:hsl(158, 66%, 95%);
}
.album{
  width: 100%;
}
.img{
  width: 50%;
}

strike{
 color: hsl(219, 9%, 45%);
}
/* Number of orders */
#more,#less{
text-align: center;
font-size: 30px;
width: 45px;
height: 45px;
border-radius: 10px;
border: none;
color:hsl(26, 100%, 55%) ;

}
#orderNumber{
    padding: 10px;
}
#compt{
  background-color: whitesmoke;
  width:100px;
  margin: 20px;
  border-radius: 10px;
  
}
.buttonGroup{
    display: flex;
    
}
#addCartButtonDiv{
    margin: auto;
}
#addCartButton{
    width: 350px;
    height: 50px;
    color: white;
    background-color: hsl(158, 66%, 80%);
    border: none;
    border-radius: 10px;
    cursor: pointer;
}
#addCartButton:hover{
    background-color: hsl(155, 66%, 70%);
    filter: drop-shadow(0 6mm 2mm hsl(157,66%,77%));
    transition: 0.2s;
}

/* ----------------Media------------ */
@media (max-width: 1400px) {
      .details{
          width: 50%;
      }
      #addCartButton{
          width: 150px;
      }
      #description{
          width: 100%;
      }
      
   
  }

  
  

  @media (max-width: 1214px) {
      .buttonGroup{
          display: block;
          padding: 5%;
          
      }
      #compt{
          width: fit-content;
          padding: 5px;
          
      }
      #addCartButton{
        width: 139px;
        
    }
    
    h1{
        font-size: 45px;
    }
   
  }
  
  
  @media (max-width: 900px) {
    #productTargeted{
        display: block;
    }
    
    .details{
        width: 85%;
    }
    .container{
        padding: 0;
    }
    .buttonGroup{
        display: block;
          padding: 1%;
          width: 150px;
          padding-left: 20%;
          border: none;
    }
    #compt{
        display: flex;
        justify-content: space-between;
        width: 340px;
        padding: 5px;
        
    }
    #addCartButton{
      width: 350px;
      
  }
  }

  @media (max-width: 558px) {
    
    .buttonGroup{
        display: block;
          padding: 1%;
          width: 150px;
          
          border: none;
    }
    
    #compt{
        display: flex;
        justify-content: space-between;
        width: 250px;
        padding: 5px;
        
    }
    #addCartButton{
      width: 260px;
      
  }
  .picture img{
    width: 410px;
  }
 
  h1{
    font-size: 25px;
    font-weight: bold;
}

  
  } 
  
    
    </style>
    

    
  </head>
  <body>
    
<header>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/" style="color:#66EB9A">WE FASHION</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/product/onsale">Sales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/product/category/women">Women</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/product/category/men">Men</a>
        </li>
             
        
        
       
      </ul>
      @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/admin') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">.</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </div>
  </div>
</nav>
</header>

<main>

  @yield("contenu")

</main>

<footer class="text-muted ">
  <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
   

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col">
          <h5 class="text-uppercase">Informations</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Mentions légales </a>
            </li>
            <li>
              <a href="#!" class="text-white">Presse</a>
            </li>
            <li>
              <a href="#!" class="text-white">Fabrication</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col">
          <h5 class="text-uppercase">Service clients</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Contactez-nous </a>
            </li>
            <li>
              <a href="#!" class="text-white">Livraison & Retour </a>
            </li>
            <li>
              <a href="#!" class="text-white">Conditions de vente </a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col">
          <h5 class="text-uppercase">Réseaux sociaux</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">facebook</a>
            </li>
            <li>
              <a href="#!" class="text-white">instagram</a>
            </li>
            <li>
              <a href="#!" class="text-white">plus...</a>
            </li>
            
          </ul>
        </div>
        

        
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright : Sebastian Meliot
    <a class="text-white" href="https://github.com/sebastianmel/wefashionProject" target="_blank">Github</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</footer>


    <script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

      
  </body>
</html>