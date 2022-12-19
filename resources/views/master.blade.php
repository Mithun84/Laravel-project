<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
         integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">         -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.js')}}">
        
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <title>ms-Project</title>
    </head>
    <body>
        {{View::make('header')}}
        <!-- yield means crop,development -->
        @yield('content') 
        <!-- {{View::make('footer')}} -->
    </body>
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
               color: #b81162;
               text-decoration: none;
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
</html>