@extends('master')
@section('content')
<div class="custom-product">
<div class="col-sm-10">
    <div class="trending-wrapper">
    <h4>Result for Products </h4>
      @foreach ($products as $item)
        <div class="row searched-item cart-list-divider">
        <div class="col-sm-3">
        <a href="detail/{{$item->id}}">
          <img class="trending-img" src="{{$item->gallery}}" >
          </a>
        </div>
        <div class="col-sm-4">
            <h3>{{$item->name}}</h3>
            <h6>{{$item->description}}</h6>
        </div>
        </div>
        @endforeach
      </div> 
    </div>
</div>
@endsection