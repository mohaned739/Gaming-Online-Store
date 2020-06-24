@extends('layouts.app')
@section('head')
    Login
    @endsection
@section('content')
    <link rel="stylesheet" href="css/login_style.css">
<div class="container-fluid" id="back_cont" style="border: solid">
      <div class="row" id="red_back">
        <div class="col-md-8 col-md-offset-2"  id="blue_cont">
            <div class="panel panel-default" id="yellow_cont" >
                <div class="panel-heading" style="background: transparent"><h1 style="margin-left:40%;color: white">Login</h1></div>

               <div class="panel-body">
                  <form id="login_form" class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error': '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6" style="max-width: 70%">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))

                                    <span class="help-block">
                                            <strong style="font-size: 18px">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6" style="max-width: 70%">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong style="font-size: 18px">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button id="login_btn" type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--Forgot Your Password?--}}
                                {{--</a>--}}
                                <br> <br>
                                <a class="btn btn-link" href="{{ route('register') }}">
                                    Create an Account?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
