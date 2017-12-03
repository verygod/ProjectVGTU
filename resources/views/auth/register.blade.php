@extends('layouts.user')

@section('content')



<body class="login-page sidebar-collapse">
    <div class="page-header" filter-color="orange">
        <div class="page-header-image" style="background-image:url(../assets/img/login.jpg)"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="header header-primary text-center">
{{--                             <div class="logo-container">
                                <img src="../assets/img/now-logo.png" alt="">
                            </div> --}}
                            <h3>Register</h3>
                        </div>
                        <div class="content">
                            <div class="input-group form-group-no-border input-lg {{ $errors->has('name') ? ' has-error' : '' }}">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons business_badge"></i>
                                </span>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
                            </div>

                            <div class="input-group form-group-no-border input-lg {{ $errors->has('email') ? ' has-error' : '' }}">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_email-85"></i>
                                </span>
                               <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
 
                            </div>

                            <div class="input-group form-group-no-border input-lg {{ $errors->has('password') ? ' has-error' : '' }}">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </span>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password..." required>
                            </div>

                            <div class="input-group form-group-no-border input-lg ">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                </span>
                                <input id="password" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password..." required>
                            </div>
                        </div>


                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                                @if ($errors->has('email'))
                                    <div class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif

                                @if ($errors->has('password'))
                                    <div class="help-block mt-4">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif

                        <div class="footer text-center">
                            <button type="submit" class="btn btn-primary btn-round btn-lg btn-block">Register</button>

                        </div>
                        <div class="pull-left">
                            <h6>
                                <a href="{{ route('login') }}" class="link">Have an account? Login!</a>
                            </h6>
                        </div>
                        <div class="pull-right">
                            <h6>
                                <a href="{{ route('password.request') }}" class="link">
                                    Forgot Your Password?
                                </a>
                            </h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
{{--         <footer class="footer">
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
        </footer> --}}
    </div>
</body>



{{-- <div class="container">
    <div class="row mt-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">Register</div>

                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>


                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
