@extends('layouts.app2')

<!--@section('content')
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       

        <!--Fonts -->
      <!--  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
       <<style>
      
            html,body{
                background-color:#333;
                color:#636b6f;
                font-family:'Nunito',sans-serif;

            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: left;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
   <!-- <body>
          <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
         <div>
         <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    
                      
                     
                     
                    @endauth

                </div>
            @endif  --> 
             
          <!--  <div class="content">
                <div class="row">
                    <div class="col-6">
                        <div class="title m-b-md">
                         jkjio
                        
                </div>
            </div>
        </div>-->
    </body>
</html>
@endsection 