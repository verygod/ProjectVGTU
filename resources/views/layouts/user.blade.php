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
  </head>
  <body>
    <div class="landing-page sidebar-collapse">
      <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent" color-on-scroll="300" style="z-index: 999">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              @guest
              @else
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Admin
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('users.index') }}">Users</a>
                  <a class="dropdown-item" href="{{ route('permissions.index') }}">Permissions</a>
                  <a class="dropdown-item" href="{{ route('roles.index') }}">Roles</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ url('home') }}">To->Do</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('items.index') }}">Works</a>
                  <a class="dropdown-item" href="{{ route('categories.index') }}">Categories</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Įkelti darbą</a>
              </li>
              @endguest
            </ul>
            <ul class="navbar-nav justify-content-end">
              
              @guest
              <li class="nav-item dropdown" id="login-menu">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                </div>
              </li>
              @else
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ url('profile') }}">Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
              </div>
            </li>
            @endguest
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