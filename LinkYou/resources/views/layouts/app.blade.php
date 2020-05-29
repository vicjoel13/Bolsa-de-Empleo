<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Icono -->
    <link rel="icon" href="https://image.flaticon.com/icons/svg/121/121156.svg" type="image/x-icon">

    <!-- Fonts -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8b823756ec.js" crossorigin="anonymous"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LinkYou</title>
    <link rel="icon" href="https://image.flaticon.com/icons/svg/121/121156.svg" type="image/x-icon">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/details.css') }}" rel="stylesheet">

        <!-- import CSS -->
<link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
<link href="{{ asset('css/Admin.css') }}"  rel="stylesheet" type="text/css">
<!-- import JavaScript -->

   <!-- import local CSS -->
   <link rel="stylesheet" href="{{ asset('css/style.css')}}">
   <!-- import element CSS -->
   <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
   <!-- import Font -->
   <link href="https://fonts.googleapis.com/css2?family=Cabin&display=swap" rel="stylesheet">
   <!-- import ImgUr CSS  -->
   <link href="{{ asset('Img Upload/css/style.css') }}" rel="stylesheet" media="screen">
   <link href="{{ asset('Img Upload/css/mobile-style.css')}}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
           <!-- Fonts -->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        
      
         <!-- Styles -->
        <style>
            /* html, body{
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                
            }

           
        

            .full-height {
                height: 11vh;
            }

            .flex-center {
               
                display: flex;
                justify-content: center;
                border-color: transparent;
                margin-bottom: 0;
                z-index: 9999;
                border: 0;
                font-size: 12px !important;
                line-height: 1.42857143 !important;
                letter-spacing: 4px;
                border-radius: 0;
            }

            .texto-encima{
                position: absolute;
                top: 240px;
                right: 10px;
}
            .carousel-caption{
                position: absolute;
                top: 50%;
                left: 50%;
                 transform: translate(-50%, -50%);
                 color:white;
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
        
            .carousel{
                position:absolute;
                top:0;
            }


            .links > a {
                color:black;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            } */
        </style>

    
</head>
<body>
    <div id="app809">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                 LinkYou
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

<!-- JS, Popper.js, and jQuery -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <!-- Dependencias Necesarias-->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
 
  <script src="https://unpkg.com/element-ui/lib/index.js"></script>
  <script src="{{ asset('js/PostJob.js') }}"></script>
  <!-- inport local JavaScript -->
<script src="{{ asset('js/01.js') }}"></script>
<script src="{{ asset('js/02.js') }}"></script>
<script src="{{ asset('js/Admin.js') }}"></script>

<!-- import ImgUr JavaScript -->
<script type="text/javascript" src="{{ asset('Img Upload/js/imgur.js') }}"></script>
<script type="text/javascript" src="{{ asset('Img Upload/js/upload.js') }}"></script>


    <!-- JS, Popper.js, and jQuery -->
    <script src="path/from/html/page/to/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8b823756ec.js" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<!-- Dependencias Necesarias-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>

<!-- Scripts For ShowJobs -->
@if (\Request::is('ShowJobs'))
    <script src="{{ asset('js/ShowJob.js') }}"></script>
<!-- Scripts For PostJob -->
@elseif (\Request::is('Company/post/*'))
    <script src="{{ asset('js/PostJob.js') }}"></script>
<!-- Scripts For PostJob -->
@elseif (\Request::is('Company/edit/*'))
    <script src="{{ asset('js/EditJob.js') }}"></script>


<!-- Scripts For PostJob -->
@elseif (\Request::is('Admin'))
    <script src="{{ asset('js/AdminJobs.js') }}"></script>

    <!-- Scripts For PostJob -->
@elseif (\Request::is('Admin'))
    <script src="{{ asset('js/AdminJobs.js') }}"></script>
    @elseif(\Request::is('Company/*'))
    <script src="{{ asset('js/ShowJobCompany.js') }}"></script>
@else

<!-- Scripts For PostJob -->
    <script src="{{ asset('js/JobDetails.js') }}"></script>
@endif

<!-- import ImgUr JavaScript -->
    <script type="text/javascript" src="{{ asset('Img Upload/js/imgur.js') }}"></script>
    <script type="text/javascript" src="{{ asset('Img Upload/js/upload.js') }}"></script>

</body>


</html>
