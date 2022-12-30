<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')){
    $total = ProductController::cartItem();
}
?>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="/ ">iCoder</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item mr-4">
            <a class="nav-link" href="myorders">Order</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success ml-2" type="submit">Search</button>
        </form>
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0 cart_right">
          <li class="nav-item">
          
          <a class="nav-link active" aria-current="page" href="/cartlist"><i class="fa-solid fa-cart-plus"></i><span class='sticky-top badge badge-danger badge-pill' > {{$total}}</span></a>

          </li>
          @if(Session::has('user'))
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                {{Session::get('user')['name']}}
              </a>
              <div class="dropdown-menu">
                <a href="/logout">Logout</a>
                
              </div>
            </li>
            @else
            <li class="nav-item">
              <a href="/login" class="text-light text-decoration-none">Login</a>
              <a href="/register" class="text-light text-decoration-none">Register</a>

            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>