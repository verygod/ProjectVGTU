<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/now-ui-kit.css?v=1.1.0') }}" rel="stylesheet">
    <style type="text/css">
    #login-menu .dropdown-toggle::after {
    display:none
    }
    </style>

<body class="sidebar-collapse">
   <nav class="navbar navbar-expand-lg bg-primary" id="login-menu" color-on-scroll="400">
        <div class="container">
            <div class="dropdown button-dropdown">
                <a href="#pablo" id="navbarDropdown">
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                    <span class="button-bar"></span>
                </a>
            </div>

            <div class="navbar-translate">
                <a class="navbar-brand" href="">Laravel</a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">

                <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('profile') }}">{{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                    <div class="dropdown" style="z-index: 999">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cogs" aria-hidden="true"></i></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-header">Admin Panel</a>
                        <a class="dropdown-item" href="{{ route('users.index') }}">Users</a>
                        <a class="dropdown-item" href="{{ route('permissions.index') }}">Permissions</a>
                        <a class="dropdown-item" href="{{ route('roles.index') }}">Roles</a>
                        <a class="dropdown-header">Admin extra</a>
                        <a class="dropdown-item" href="{{ url('home') }}">To->Do</a>
                        <a class="dropdown-header">Function Panel</a>
                        <a class="dropdown-item" href="{{ route('items.index') }}">Works</a>
                        <a class="dropdown-item" href="{{ route('categories.index') }}">Categories</a>
                    </div>
                    </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-lock"></i>
                            <p>Logout</p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                    </li>
            
                @endguest
                        <hr>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
                            <i class="fa fa-twitter"></i>
                            <p class="d-lg-none d-xl-none">Twitter</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
                            <i class="fa fa-facebook-square"></i>
                            <p class="d-lg-none d-xl-none">Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
                            <i class="fa fa-instagram"></i>
                            <p class="d-lg-none d-xl-none">Instagram</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php if(Session::has('flash_message')): ?>
    <div class="alert alert-success alert-dismissible fade show col-md-4 mt-4 mx-auto" role="alert">
      <strong> <?php echo session('flash_message'); ?></strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php endif; ?>
    
    @include ('layouts.error')
    @yield('content')
  </div>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/core/jquery.3.2.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/core/popper.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/core/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/plugins/bootstrap-switch.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/plugins/nouislider.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/plugins/bootstrap-datepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/now-ui-kit.js?v=1.1.0') }}"></script>
</body>
</html>