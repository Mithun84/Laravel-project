@extends('master')
@section("content")
<div class="slider_image">
    
    <div class="col-sm-10">
        <div class="trending_wrapper">
            <h4>my orders</h4><br>
            @foreach($orders as $item)
                <div class="row cart_list_divider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending_image" src="{{$item->gallery}}" alt="image">
                           
                        </a>
                    </div>
                    <div class="col-sm-4">
                            <div class="">
                                <h2>{{$item->name}}</h2>
                                <h5>Delivery Status : {{$item->status}}</h5>
                                <h5>Address : {{$item->address}}</h5>
                                <h5>Payment Status : {{$item->payment_status}}</h5>
                                <h5>Payment Method : {{$item->payment_method}}</h5>

                            </div>
                        
                    </div>
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                          
                        </a>
                    </div>
                    
                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection