@extends('layouts.app')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
            <form class="login100-form validate-form" role="form" method="POST" action="{{ route('do.login') }}">
                @csrf
					<span class="login100-form-title p-b-33">
						{{strtoupper(config('app.name'))}} LOGIN
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" value="{{old('email')}}" placeholder="Email">
                    <span class="focus-input100-1"></span>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                    <input class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password">
                    <span class="focus-input100-1"></span>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>

                <div class="container-login100-form-btn m-t-20">
                    <button class="login100-form-btn">
                        Sign in
                    </button>
                </div>
                <div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Forgot
						</span>

                    <a href="{{route('password.index')}}" class="txt2 hov1">
                        Password?
                    </a>
                </div>

                <div class="text-center">
						<span class="txt1">
							Create an account?
						</span>

                    <a href="{{route('register')}}" class="txt2 hov1">
                        Sign up
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

@stop
