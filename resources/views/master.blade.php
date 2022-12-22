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
        {{View::make('header')}}
        <!-- yield means crop,development -->
        @yield('content') 
        <!-- {{View::make('footer')}} -->
    </body>
    
</html>