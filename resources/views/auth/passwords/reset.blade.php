@extends('layouts.app')

@section('content')
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                <form class="login100-form validate-form" role="form" method="POST"
                      action="{{ route('password.update') }}">
                    @csrf
                    <span class="login100-form-title p-b-33">
						RESET PASSWORD
					</span>

                    <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                        <input class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                               name="password" placeholder="Password">
                        <span class="focus-input100-1"></span>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <input type="hidden" name="email_verification_token" value="{{$token}}">
                    <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                        <input class="input100 {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" type="password"
                               name="password_confirmation" placeholder="Confirm Password">
                        <span class="focus-input100-1"></span>
                        @if ($errors->has('password_confirmation'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="container-login100-form-btn m-t-20">
                        <button class="login100-form-btn">
                            Reset Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
