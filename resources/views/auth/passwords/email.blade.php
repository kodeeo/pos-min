@extends('layouts.app')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <form class="login100-form validate-form" role="form" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <span class="login100-form-title p-b-33">
						FORGOT PASSWORD
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


                    <div class="container-login100-form-btn m-t-20">
                        <button class="login100-form-btn">
                            Send Mail
                        </button>
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
