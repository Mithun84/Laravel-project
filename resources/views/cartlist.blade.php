@extends('master')
@section("content")
<div class="slider_image">
    
    <div class="col-sm-10">
        <div class="trending_wrapper">
            <h4>Result for Products</h4><br>
            <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
            @foreach($products as $item)
                <div class="row cart_list_divider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending_image" src="{{$item->gallery}}" alt="image">
                           
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="detail/{{$item->id}}">
                            <div class="">
                                <h2>{{$item->name}}</h2>
                                <h5>{{$item->description}}</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <div class="">
                              <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to cart</a>
                            </div>
                        </a>
                    </div>
                    
                </div>
            @endforeach
        </div>
        <a class="btn btn-success" href="ordernow">Order Now</a><br><br>

    </div>
</div>
@endsection