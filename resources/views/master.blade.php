<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <!-- <meta charset="utf-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body>
    @include('header')
    @yield('content')
    @include('footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  <style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 500px !important;
    }
    .custom-product{
      height: 600px;
    }
    .slider-text{
      background-color: #d8d8d8 !important;
    }
    .slider-background{
      background-color: #f1f0f0;
    }
    img.trending-img{
      height:100px;
    }
    .trending-item{
      float:left;
      width:20%;
    }
    .trending-wrapper{
      margin:20px;
    }
    .detail-img{
      height:200px;
    }
    .search-box{
      width:200px !important; 
    }
    .cart-list-divider{
      border-bottom: 1px solid #ccc;
      margin-bottom: 20px;
      padding-bottom: 20px;
    }
  </style>
</html>