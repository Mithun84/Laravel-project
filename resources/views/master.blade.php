<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.js')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <!-- fontawesome icon -->
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}"> -->
        <link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
        <title>ms-Project</title>
    </head>
    <body>

<!-- latest -->



        {{View::make('header')}}
        <!-- yield means crop,development -->
        @yield('content') 
        <!-- {{View::make('footer')}} -->
    </body>
<<<<<<< HEAD
    
=======
    <style>
      
         .custom_login{
            height: 513px;
            padding-top:100px;
             }
             .cart_right{
               margin-left:30%;
             }
             .slider_image{
                height: 500px !important;
             }
             .product_margin_top{
               margin-left:60px;
               margin-bottom:20px;
             }
             .product_margin{
               margin-left:60px;
             }
             
             .slider_text{
                background-color:#35443585 !important;
             }
             .trending_image{
                height:100px;
             }
             .trending-item{
                float:left;
                width:25%;
                padding: 0px;
               }
             . {
                margin:30px;
             }
             .detail_img{
                height:200px;
             }
             .carousel-control-prev-icon,
             .carousel-control-next-icon {
               background-image: none;
             }
             .align_h4{
               color: black !important;
               /* text-decoration: none; */
               text-align: center;
             }
             .carousel-control-next-icon:after{
               content: '>' !important;
               font-size: 30px !important;
               color: red !important;
             }
             .carousel-control-prev-icon:after {
               content: '<' !important;
               font-size: 30px !important;
               font-weight:700px !important;
               color: red !important;

             }
             .cart_list_divider{
              border-bottom: 1px solid #ccc;
              margin-bottom:20px;
              padding-bottom: 20px;
             }
    </style>
>>>>>>> 5717ac8ab6d31b48050b75ce496fc41c34c8c264
</html>