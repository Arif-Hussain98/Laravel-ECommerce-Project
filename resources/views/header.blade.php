<?php
use App\Http\Controllers\ProductController;
  $total = 0;
  if(Session::has('user')){
    $total = ProductController::cardItem();
  }
  

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="/">E-Comm</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Order <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="#">Add to Cart <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    
    <form action="/search" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="Search">Search</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
      <li style="margin-left:20px;"><a href="/cartlist">Cart({{$total}})</a></li>

      @if(Session::has('user'))
      <li class="dropdown" style="margin-left:20px;">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
      <span class="caret"></span></a>
      <ul class="dropdown-menu">
      <li><a href="/logout"> Logout</a></li>
      </ul>
      </li>
      @else
      <li><a href="/login">Login</a></li>
      @endif
    </ul>
  </div>
</nav>