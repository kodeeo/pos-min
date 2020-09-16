@extends('layouts.app')

@section('content')
{{--    @dd($errors)--}}
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <form class="login100-form validate-form" role="form" method="POST" action="{{ route('do.register') }}">
                    @csrf
                    <span class="login100-form-title p-b-33">
						{{strtoupper(config('app.name'))}} REGISTRATION
					</span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100 {{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" value="{{old('name')}}" placeholder="Full Name">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" value="{{old('email')}}" placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                        <input class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <span class="login100-form-title p-b-33  pt-4">
						 Shop Information
					</span>

                    <div class="wrap-input100 validate-input">
                        <input class="input100 {{ $errors->has('shopName') ? ' is-invalid' : '' }}" type="text" name="shopName" value="{{old('shopName')}}" placeholder="Shop Name">
                        @if ($errors->has('shopName'))
                            <span class="text-danger">{{ $errors->first('shopName') }}</span>
                        @endif
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input class="input100 {{ $errors->has('shopAddress') ? ' is-invalid' : '' }}" type="text" name="shopAddress" value="{{old('shopAddress')}}" placeholder="Shop Address">
                        @if ($errors->has('shopAddress'))
                            <span class="text-danger">{{ $errors->first('shopAddress') }}</span>
                        @endif
                    </div>

                    <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                        <input class="input100 {{ $errors->has('shopEmail') ? ' is-invalid' : '' }}" type="text" name="shopEmail" placeholder="Shop Email">
                        @if ($errors->has('shopEmail'))
                            <span class="text-danger">{{ $errors->first('shopEmail') }}</span>
                        @endif
                    </div>

                    <div class="container-login100-form-btn m-t-20">
                        <button class="login100-form-btn">
                            Sign up
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
							Already have an account?
						</span>

                        <a href="{{route('login')}}" class="txt2 hov1">
                            Sign in
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
