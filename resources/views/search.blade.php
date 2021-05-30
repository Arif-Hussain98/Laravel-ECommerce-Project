@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-3">
    <a href="#">Filte Products</a>
    </div>

    <div class="col-sm-3">
    <div class="trending-wrapper">
    <h4>Result for Products </h4>
      @foreach ($products as $item)
        <div class="searched-item">
        <a href="detail/{{$item['id']}}">
          <img class="trending-img" src="{{$item['gallery']}}" >
          <div class="">
            <h3>{{$item['name']}}</h3>
            <h6>{{$item['description']}}</h6>
          </div>
          </a>
        </div>
        @endforeach
      </div> 
    </div>
</div>
@endsection