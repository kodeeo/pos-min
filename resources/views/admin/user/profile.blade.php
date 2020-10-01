@extends('layouts.backend.app')

@section('title', 'Profile')

@push('css')
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .user_info img {
            width: 30%;
            padding-top: 12px;

        }

        .user_mail {
            padding: 50px 200px;
            color: #00B9B5;
        }

        .user_edit > button {
            color: #005D5A;
            background-color: #00cec9;
            margin-top: 60px;
            border: 2px solid transparent;
        }

        .user_edit > button:hover {
            border: 2px solid #00cec9;
            background: none;
        }

        .user_pro {
            border-bottom: 2px solid #00B9B5;
        }

        .table_area .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
            background-color: #E6FAFA;
        }

        .shop_area h1 {
            color: #00B9B5;
        }

        .shop_btn a {
            color: #005D5A;
            border: 2px solid #00cec9;
        }

        .shop_btn > a:hover {
            background-color: #00cec9;
        }

    </style>
@endpush

@section('content')
    <div class="content-wrapper p-2">
        <!--user_profile start-->
        <div class="user_pro mt-2">
            <div class="container">
                <div class="row">
                    <div class="user_info col-md-6 col-sm-6">
                        <img class="float-left" src="{{ URL::asset('storage/setting/'. $setting->logo) }}" alt="Logo">
                        <div class="user_mail font-weight-bold">
                            <p>{{auth()->user()->name}}</p>
                            <p>{{auth()->user()->email}}</p>
                        </div>
                    </div>
                    <div class="user_edit col-md-6 col-sm-6">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn float-right shadow-none text-decoration-none"
                                data-toggle="modal" data-target="#exampleModal">
                            Edit Profile
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!--user_profile end-->
        <!--user_shop_area start-->
        <div class="shop_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-capitalize">shop information</h1>
                    </div>
                    <div class="col-md-6 shop_btn">
                        <a href="{{ route('admin.setting.index') }}"
                           class="btn float-right shadow-none text-decoration-none mt-2">Edit</a>
                    </div>

                </div>

                <div class="table_area text-capitalize">
                    <table class="table table-striped table-responsive-sm">
                        <tbody>
                        <tr>
                            <td>Name</td>
                            <td>{{$setting->name}}</td>
                        </tr>
                        <tr>
                            <td>address</td>
                            <td>{{$setting->address}}</td>
                        </tr>
                        <tr>
                            <td>email</td>
                            <td>{{$setting->email}}</td>
                        </tr>
                        <tr>
                            <td>phone</td>
                            <td>{{$setting->phone}}</td>
                        </tr>
                        <tr>
                            <td>mobile</td>
                            <td>{{$setting->mobile}}</td>
                        </tr>
                        <tr>
                            <td>tax</td>
                            <td>{{$setting->tax}}%</td>
                        </tr>
                        <tr>
                            <td>city</td>
                            <td>{{$setting->city}}</td>
                        </tr>
                        <tr>
                            <td>country</td>
                            <td>{{$setting->country}}</td>
                        </tr>
                        <tr>
                            <td>zip code</td>
                            <td>{{$setting->zip_code}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--user_shop_area start-->
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('admin.profile.update')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" value="{{auth()->user()->name}}">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" value="{{auth()->user()->email}}" readonly>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </div>
                    </form>
                    <form action="{{route('admin.profile.update.password')}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="password">Old Password</label>
                                <input type="password" name="old_password" class="form-control {{ $errors->has('old_password') ? ' is-invalid' : '' }}" id="password">
                                @if ($errors->has('old_password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('old_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="newPassword">New Password</label>
                                <input type="password" name="newPassword" class="form-control {{ $errors->has('newPassword') ? ' is-invalid' : '' }}" id="newPassword">
                                @if ($errors->has('newPassword'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('newPassword') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="confirmNewPassword">Confirm New Password</label>
                                <input type="password" name="newPassword_confirmation" class="form-control {{ $errors->has('newPassword_confirmation') ? ' is-invalid' : '' }}" id="confirmNewPassword">
                                @if ($errors->has('newPassword_confirmation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('newPassword_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Update Password</button>
                        </div>
                    </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
