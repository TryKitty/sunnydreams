<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - sunnydreams</title>
  <link rel="stylesheet" href= {{ asset('me/dist/css/bootstrap.css') }}>
  <link rel="stylesheet" href= {{ asset('me/dist/css/sunny.css') }}>
  <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
</head>
<body class="text-center p-0">

<header>

  <nav class="navbar bg-transparent navbar-expand-md navbar-light  fixed-top bg-dark ">
    <a class="navbar-brand nv" href="#">Sunnydreams.</a>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navli navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="shop.html">Shop <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Catalog <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Contact <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <button type="button" class=" mt-4 mr-2 btn btn-md btn-outline-dark rd float-right kd">Kindness Club</button> 
       <a href=""><box-icon name='cart' class="rd float-right mt-4"></box-icon> </a>

      </form>
    </div>
  </nav>

</header>
<main role="main" class=" justify-content-center ">

  <div class="container-fluid sticky-bottom ">
  <div class="row featurette h-100 justify-content-center flex-wrap" >
    <div class="col-md-8 mt-2 mb-0 h-100" >
    
 
      <h2 class="featurette-heading">
        <button type="button" class="btn btn-lg btn-outline-secondary rd text-center">uwo cooreeeeee</button>
        <h4 class="cp">Spread Kindness, keep your dream, <br>shine with sun and all you need it this tote bag . </h4>  </h2>
      
       
          <div class="row p-0 text-center ">
            <div class="col-4 p-0 mr-0 "> <img  class="lghome" src="img/logo.jpg" alt="" srcset=""> </div>
            <div class="col-6  ml-0 p-0"> 
              <div class="col-md-6 " > <h2 class="cp2"> KindnessClub </h2> </div>
              <div class="col-md-6 "> <h4 class="cp3"> <p> Thank you for loving me <br>  Thank you for loving me <br>  Thank you for loving me </p></h4>  </div>
            </div> 
          </div>
     
      <p class="lead"><button type="button" class="btn btn-outline-secondary rd mt-3">Vol 1 Hey Kindness</button> <br>
        <button type="button" class="btn btn-outline-secondary mt-3 rd">Vol 2 Love Yourself</button> <br>
        <button type="button" class="btn btn-outline-secondary mt-3 rd">Vol 3 Kindness Club</button> <br></p>
       
        <p class="text-left order"> <button type="button" class="btn btn-outline-secondary rd order">ORDER</button> </p>
      </div>
    <div class="col-md-4 h-100 p-0" >
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100 h-100" src="img/imgr.jpg" alt="" srcset="">
            <div class="container">
              <div class="carousel-caption text-left">
                <div class="row p-0  text-center">
                  <div class="col-4 p-0"><a href=""> <box-icon type='logo' name='instagram'></box-icon> </a></div>
                  <div class="col-4 p-0"><a href=""> <box-icon name='whatsapp' type='logo' ></box-icon> </a></div>
                  <div class="col-4 p-0"><a href=""> <img class="shopee" src="img/shopee.png" alt="" srcset=""> </a></div>
                </div>
          
              </div>
            </div>

          </div>
          <div class="carousel-item">
            <img class="w-100 h-100" src="img/imgr.jpg" alt="" srcset="">
            <div class="container">
              <div class="carousel-caption text-left">
                <div class="row p-0  text-center">
                  <div class="col-4 p-0"><a href=""> <box-icon type='logo' name='instagram'></box-icon> </a></div>
                  <div class="col-4 p-0"><a href=""> <box-icon name='whatsapp' type='logo' ></box-icon> </a></div>
                  <div class="col-4 p-0"><a href=""> <img class="shopee" src="img/shopee.png" alt="" srcset=""> </a></div>
                </div>
          
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="w-100 h-100" src="img/imgr.jpg" alt="" srcset="">
            <div class="container">
              <div class="carousel-caption text-left">
                <div class="row p-0  text-center">
                  <div class="col-4 p-0"><a href=""> <box-icon type='logo' name='instagram'></box-icon> </a></div>
                  <div class="col-4 p-0"><a href=""> <box-icon name='whatsapp' type='logo' ></box-icon> </a></div>
                  <div class="col-4 p-0"><a href=""> <img class="shopee" src="img/shopee.png" alt="" srcset=""> </a></div>
                </div>
          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</main>

<script src= {{ asset('me/js/dist/popover.js') }}></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src= {{ asset('me/assets/js/vendor/jquery-slim.min.js') }}><\/script>')</script><script src= {{asset('me/dist/js/bootstrap.bundle.min.js')}}></script>
  </body>
</html

