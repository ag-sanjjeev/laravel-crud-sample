<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Laravel</title>

        <!-- Css -->
        <link rel="stylesheet" type="text/css" href="/css/thirdparty/bootstrap.css" media="all" />

        <!-- Icon -->
        <link rel="stylesheet" type="text/css" href="/icon/fontawesome/css/all.css" media="all" />

        @yield('styles')
       
    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    
            <div class="container-fluid">

                <a class="navbar-brand" href="#">
                      <i class="fa fa-code"></i>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMain">
                    
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::route('index')}}">Home</a>
                        </li>

                        @auth                        
                                                
                        <li class="nav-item">
                          <a class="nav-link" href="{{URL::route('crud')}}">Crud</a>
                        </li>

                        @endauth

                    </ul>

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        @guest
                        <li class="nav-item">
                            <a href="{{ URL::route('login') }}" class="btn btn-warning">Login</a>
                        </li>
                        @endguest

                        @auth
                        <li class="nav-item d-flex align-items-center mx-3">
                            <span class="small fw-bold badge bg-warning rounded-pill text-dark">Welcome {{ $username ?? 'User'}}</span>
                        </li>

                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Logout</button>
                            </form>
                        </li>
                        @endauth

                    </ul>
                </div>
            </div>

        </nav> 

        @yield('content')

    <!-- Scripts -->
    <script type="text/javascript" src="/js/thirdparty/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="/js/thirdparty/bootstrap.bundle.js"></script>

    @yield('scripts')
    </body>
</html>
