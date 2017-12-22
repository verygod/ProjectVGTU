@component('layouts.misc.assets')
@endcomponent
<nav class="navbar navbar-expand-lg bg-white fixed-top navbar-transparent sidebar-collapse" id="login-menu" color-on-scroll="400">
    <div class="container">
        <div class="dropdown button-dropdown">
            <a href="{{ url('home') }}" id="navbarDropdown">
                <span class="button-bar"></span>
                <span class="button-bar"></span>
                <span class="button-bar"></span>
            </a>
        </div>
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ url('/') }}">Laravel</a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        {{--             <div class="navbar-translate">
            <a class="navbar-brand" href="{{ url('atrask') }}">Atrask</a>
        </div> --}}
        <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
            <ul class="navbar-nav">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Visi darbai" href="{{ url('find') }}">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                        <p class="d-lg-none d-xl-none">Visi darbai</p>
                    </a>
                </li>
                @else
                <li class="nav-item">
                    @php
                    $username = Auth::user();
                    @endphp
                    <a class="nav-link" data-toggle="tooltip" data-placement="bottom" title="{{ $username->name }}" href="{{ url('profile', $username->id) }}">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <p class="d-lg-none d-xl-none">{{ $username->name }}</p></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Visi darbai" href="{{ url('find') }}">
                            <i class="fa fa-briefcase" aria-hidden="true"></i>
                            <p class="d-lg-none d-xl-none">Visi darbai</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Įkelk!"  href="{{ route('upload.index') }}">
                            <i class="fa fa-upload" aria-hidden="true"></i>
                            <p class="d-lg-none d-xl-none">Įkelk</p></a>
                        </a>
                    </li>
                    @include('layouts.misc.admin')
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#myModal" >
                            <i class="fa fa-lock"></i>
                            <p class="d-lg-none d-xl-none">Logout</p>
                        </a>
                    </li>
                    @endguest
                    <hr>
                    @guest
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
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <!-- Modal Core -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Are you sure you want to logout?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">No</button>
                    <a class="btn btn-danger"" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
            </div>
        </div>
    </div>
</div>
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
<body class="sidebar-collapse">