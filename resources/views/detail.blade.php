@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <img class="detail-img" src="{{$product['gallery']}}"></img>
        </div>
        <div class="col-sm-6">  
        <a href="/">Go Back</a>
        <h3>Name : {{$product['name']}}</h3>
        <h4>Price : {{$product['price']}}</h4>
        <h6>Category : {{$product['category']}}</h6>
        <h6>Description : {{$product['description']}}</h6>
        <br><br>
        <form action="/add_to_cart" method="POST">
        @csrf
            <input type="hidden" name="product_id" value="{{$product['id']}}">
            <button class="btn btn-success">Add to Cart </button>
        </form>
        <br><br>
        <button class="btn btn-primary">Buy Now </button>
        <br><br>
        </div>
    </div>
</div>
@endsection