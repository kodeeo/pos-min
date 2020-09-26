@extends('layouts.backend.app')

@section('title', 'Create User')

@push('css')

@endpush

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 offset-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create Employee</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Create Employee</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- form start -->
                            <form role="form" action="{{ route('admin.user.store') }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Name<span class="required ml-1" style="color: red">*</span></label>
                                                <input required type="text" class="form-control" name="name"
                                                       value="{{ old('name') }}" placeholder="Enter Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Email<span class="required ml-1" style="color: red">*</span></label>
                                                <input required type="email" class="form-control" name="email"
                                                       value="{{ old('email') }}" placeholder="Enter Email">
                                            </div>
                                            <div class="form-group">
                                                <label>Role<span class="required ml-1" style="color: red">*</span></label>
                                                <select name="role" class="form-control">
                                                    @if(auth()->user()->role == 'admin')
                                                        <option value="admin">Admin</option>
                                                    @endif
                                                    <option value="shop">Shop</option>

                                                    <option value="employee" selected>Employee</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Address<span class="required ml-1" style="color: red">*</span></label>
                                                <input required type="text" class="form-control" name="address"
                                                       value="{{ old('address') }}" placeholder="Enter Address">
                                            </div>
                                            <div class="form-group">
                                                <label>Password<span class="required ml-1" style="color: red">*</span></label>
                                                <input required type="password" class="form-control" name="password"
                                                       value="{{ old('password') }}" placeholder="Enter Password">
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-md-right">Create Customer
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

@push('js')

@endpush
