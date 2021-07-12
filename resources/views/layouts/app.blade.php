<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


   <!-- Bootstrap Links -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
     <style>
       .navbar
       {
        background-color:#ab3b61!important;
       }
       .nav-link
       {
           color:#ddd9db!important;
       }
       button
       {
           background-color:#ab3b61!important;
           border-color:#ffffff!important;
       }
       .checkout a
       {
           color:#ffffff!important;
           
       }
       .btn-warning a
       {
           color:#ffffff!important;
       }
       .btn-holder
       {
           text-align:center!important;
       }
       button
       {
           background-color:#ab3b61!important;
           color:#ffffff!important;
       }
       button:hover
       {
        background-color:#ab3b61!important;
           color:#ffffff!important;
       }

     </style>

</head>
<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                 <!-- logo -->
                 <a class="navbar-brand" href="{{'home'}}">
                   <img src="https://png.pngtree.com/element_our/md/20180303/md_5a9aac2414cb3.jpg" alt="logo" style="width:40px;">
                 </a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                   <span class="navbar-toggler-icon"></span>
                 </button>
                <!-- <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                           <ul class="navbar-nav">
                           <!-- <li class="nav-item">
                               <a class="nav-link" href="{{'home'}}">Home</a>
                           </li> -->
                           <!-- <li class="nav-item">
                               <a class="nav-link" href="#">Products</a>
                           </li> -->
                           <!-- <li class="nav-item">
                               <a class="nav-link" href="{{url('add')}}">Add Product</a>
                           </li> -->
                           <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->fname }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Profile') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>

                               
                                
                            </li>
                           <li class="nav-item">

                             <!-- Cart details Starts -->
                             <!-- <div class="dropdown">
                <button type="button" class="btn btn-info" data-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>
         
                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        <div class="col-lg-6 col-sm-6 col-6">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </div>
                        <?php $total = 0 ?>
                        @foreach((array) session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                        @endforeach
                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right" style="text-align:left!important; font-size:10px!important;">
                            <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail" style="margin-top:10%!important;">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{url('/images/'.$details['photo'])}}" width="60" height="60" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product" style="font-size:10px!important;">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row mt-4" >
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <button class="btn btn-primary"> <a href="{{ url('cart') }}">View all</a></button> 
                        </div>
                    </div>
                </div>
            </div> -->
                             <!-- Cart details Ends -->
                           
                           </li >
                    
                           </ul>
                           

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            
            @yield('content')
            @include('footer')
        </main>
    </div>
    <div class="container page">
     
   </div>
    @yield('scripts')
</body>
</html>
