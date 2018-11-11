<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<style>

      
      html,body{
          background-color:#333;
          color:#636b6f;
          font-family:'Nunito',sans-serif;

      }
      .navbar{
    overflow:hidden;
    background-color:#AAA;
    font-family: Arial;
    height:100px;
}


</style>
<!--
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
  <!--  <meta name="csrf-token" content="{{ csrf_token() }}">

    

    <!--Styles -->
       <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->        
                 <!--   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                  <!--  <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Channel doctor') }}
                    </a> 
                </div>
                
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
               <!-- Right Side Of Navbar -->
               <ul class="nav navbar-nav navbar-right">
              
                     <li><a href="{{ route('medicare') }}">MEDICARE</a></li> 
                
                
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="service">Our Services <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{route('services')}}">E-Channeling</a></li>
          <li><a href="#">Page 1-2</a></li>
         </ul>
      </li>
                        <li><a href="{{ route('contactus') }}">Contact Us</a></li>
                        <li><a href="{{ route('aboutus') }}">About Us</a></li>
</ul>
</div>

                        

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                   

                    
                        <!-- Authentication Links -->

                      @guest
                      <!--  <li><a href="{{ route('login') }}">Login</a></li> -->
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="service">Login <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{route('login')}}">User</a></li>
          <li><a href="{{route('admin.login')}}">Admin</a></li>
         </ul>
      </li>
                        <li><a href="{{ route('register') }}">Register</a></li>

                     </div>

</div>

                

                        @else
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @section('js')
      
        @yield('content')
    </div>
    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
