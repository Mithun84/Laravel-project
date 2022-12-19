@extends('master')
@section("content")
<div class="slider_image">
    
    <div class="col-sm-10">
    <table class="table table-striped">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>$ {{$total}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>$ 10</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>$ {{$total+10}}</td>
      </tr>
    </tbody>
  </table>
  <div>
    <form action="/orderPlace" method="POST">
      @csrf
      <div class="form-group">
        <textarea name="address" type="email" placeholder="enter your address" class="form-control" name="" id="" cols="30" rows="10"></textarea>
      </div>
      <div class="form-group">
        <h5>Payment Method</h5> <br>
        <input type="radio" value="cash" name="payment"> <span>Online Payment</span> <br> <br>
        <input type="radio" value="cash" name="payment"> <span>EMI Payment</span> <br> <br>
        <input type="radio" value="cash" name="payment"> <span>Cash on Delivery</span>
      </div>
<button type="submit" class="btn btn-success">Order now</button> <br><br>
    </form>
  </div>
    </div>
        
</div>
@endsection