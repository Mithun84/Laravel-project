@extends('master')
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-4">
            <img class="detail_img" src= "/{{$product['gallery']}}" alt="image">
        </div>
        <div class="col-8">
            <a href="/">Go Back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Price: {{$product['price']}}</h3>
            <h4>Details: {{$product['description']}}</h4>
            <h4>Category: {{$product['category']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
            <button class="btn btn-primary">Add to cart</button>
            </form>
            <br><br>
            <button class="btn btn-success">Buy Now</button>
            <br><br>

        </div>
    </div>
    
</div>
@endsection  