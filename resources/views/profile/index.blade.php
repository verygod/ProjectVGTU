@extends('layouts.user')
@section('content')
<style type="text/css">

#columns {
column-width: 400px;
column-gap: 15px;
width: 90%;
max-width: 1100px;
margin: 50px auto;
}
div#columns figure {
background: #fefefe;
border: 2px solid #fcfcfc;
box-shadow: 0 1px 2px rgba(34, 25, 25, 0.4);
margin: 0 2px 15px;
padding: 15px;
padding-bottom: 10px;
/*transition: opacity .4s ease-in-out;*/
display: inline-block;
column-break-inside: avoid;
}
div#columns figure img {
width: 100%; 
height: auto;
border-bottom: 1px solid #ccc;
padding-bottom: 15px;
margin-bottom: 5px;
}
div#columns figure figcaption {
font-size: .9rem;
color: #444;
line-height: 1.5;
}
div#columns small {
font-size: 1rem;
float: right;
text-transform: uppercase;
color: #aaa;
}
div#columns small a {
color: #666;
text-decoration: none;
transition: .4s color;
}
div#columns:hover figure:not(:hover) {
/*opacity: 0.4;*/
}
@media screen and (max-width: 750px) {
#columns { column-gap: 0px; }
#columns figure { width: 100%; }
}
</style>
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
                    @if(Auth::id() == $user->userid)
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
                    <div class="col-md ml-auto mr-auto">
                        <h4 class="title text-center">Portfolio</h4>
                        <div id="columns">
                            @foreach($artist as $upload)
                            <figure>
                                <img src="../{{$upload->url}}">
                                {{-- <figcaption>{{$upload->name}}</figcaption> --}}
                            </figure>
                            @endforeach
                        </div>
                    </div>
                    <!-- Tab panes -->
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