@extends('master')
@section("content")
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- <ol class="">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    </ol> -->
    <div class="carousel-inner">
      @foreach($products as $key => $item)
        <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
            <img src="{{ $item->gallery }}" class="w-100 slider_image"  alt="image">
            <div class="image-caption">
              <h3>{{$item->category}}</h3>
              <p>{{$item->description}}</p>
            </div>
        </div>
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button"  data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true">     </span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- <div class="container product_margin_top">
    <div class="row">
        <h3>Trending Products</h3>
    </div>
      @foreach($products as $item)
        <div class="container product_margin">
          <div class="row trending-item">
            <a href="detail/{{$item['id']}}">
              <img class="trending_image" src="{{$item['gallery']}}">
              <h4 class="align_h4">{{$item['name']}}</h4>
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </div>  -->
  <div class="container product_margin_top">
    <div class="row">
      <div class="col">
        <h3>Trending Products</h3>
      </div>
    </div>
    @foreach($products as $item)
    <div class="row trending-item">
      <div class="col">
        <a href="detail/{{$item['id']}}">
          <img class="trending_image" src="{{$item['gallery']}}">
          <h4 class="align_h4">{{$item['name']}}</h4>
        </a>
      </div>
    </div>
    @endforeach
  </div>
@endsection