@extends('layouts.user')
@section('content')
<body class="profile-page sidebar-collapse">
    <div class="wrapper">
        <div class="page-header page-header-small" filter-color="orange">
            <div class="page-header-image" data-parallax="true" style="background-image: url('../assets/img/bg5.jpg');">
            </div>
            <div class="container">
                <div class="content-center">
              @if(empty($user->profile_image))
                    <div class="photo-container">
                        <img src="../../assets/img/ryan.jpg" alt="">
                    </div>
              @else
                    <div class="photo-container">
                        <img src="{{$user->profile_image}}" alt="">
                    </div> 
              @endif
                    <h3 class="title">{{$user->name}} {{$user->surname}} 
                        @if(Auth::id() == $user->id)
                        <a href="{{ route('edit_profile', Auth::id()) }}">
                        <i class="fa fa-pencil-square-o text-muted" aria-hidden="true"></i>
                        </a>
                        @endif
                    </h3>

                    <p class="category">
                        {{$user->email}} <br> 
                        {{$user->university}} {{$user->faculty}}
                    </p>

                    <div class="content">
                        <div class="social-description">
                            @if(!empty($user->upload_count))
                                <h2>{{$user->upload_count}}</h2>
                            @else
                                <h2>0</h2>
                            @endif
                            <p>Įkeltų darbų</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="button-container mb-5">

                    @if(!empty($user->twitter))
                    <a href="#button" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                    @endif

                    @if(!empty($user->instagram))
                    <a href="#button" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Instagram">
                        <i class="fa fa-instagram"></i>
                    </a>
                    @endif

                    @if(!empty($user->facebook))
                    <a href="#button" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                    @endif
                </div>
                <h3 class="title">Apie mane</h3>
                @if(!empty($user->about))
                <h5 class="description">
                    {{$user->about}}
                </h5>
                @else
                <h5 class="description">Kolkas nieko neužpildžiau, bet Jūs tik palaukit... :)</h5>
                @endif

                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto">
                        <h4 class="title text-center">Portfolio</h4>
                        <div class="nav-align-center">
                            <ul class="nav nav-pills nav-pills-primary" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#profile" role="tablist">
                                        <i class="now-ui-icons design_image"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#home" role="tablist">
                                        <i class="now-ui-icons location_world"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#messages" role="tablist">
                                        <i class="now-ui-icons sport_user-run"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content gallery">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="col-md-10 ml-auto mr-auto">
                                <div class="row collections">
                                    <div class="col-md-6">
                                        <img src="../assets/img/bg1.jpg" alt="" class="img-raised">
                                        <img src="../assets/img/bg3.jpg" alt="" class="img-raised">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="../assets/img/bg8.jpg" alt="" class="img-raised">
                                        <img src="../assets/img/bg7.jpg" alt="" class="img-raised">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel">
                            <div class="col-md-10 ml-auto mr-auto">
                                <div class="row collections">
                                    <div class="col-md-6">
                                        <img src="../assets/img/bg6.jpg" class="img-raised">
                                        <img src="../assets/img/bg11.jpg" alt="" class="img-raised">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="../assets/img/bg7.jpg" alt="" class="img-raised">
                                        <img src="../assets/img/bg8.jpg" alt="" class="img-raised">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="messages" role="tabpanel">
                            <div class="col-md-10 ml-auto mr-auto">
                                <div class="row collections">
                                    <div class="col-md-6">
                                        <img src="../assets/img/bg3.jpg" alt="" class="img-raised">
                                        <img src="../assets/img/bg8.jpg" alt="" class="img-raised">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="../assets/img/bg7.jpg" alt="" class="img-raised">
                                        <img src="../assets/img/bg6.jpg" class="img-raised">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer footer-default">
            <div class="container">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md">
                                MIT License
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Designed by
                    <a href="http://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                    <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </div>
            </div>
        </footer>
    </div>
</body>
@endsection