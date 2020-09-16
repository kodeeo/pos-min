@extends('layouts.backend.app')

@section('title', 'Create Customer')

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
                            <li class="breadcrumb-item active">Create Purchase</li>
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
                                <h3 class="card-title">Add New Purchase</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- form start -->
                            <form role="form" action="{{ route('admin.purchase.store') }}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Select Supplier</label>
                                                <select class="form-control" name="supplier_id" id="">
                                                    @foreach($suppliers as $supplier)
                                                        <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Select Product</label>
                                                <select class="form-control" name="product_id" id="">
                                                    @foreach($products as $product)
                                                        <option value="{{$product->id}}">{{$product->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter Quantity</label>
                                                <input class="form-control" type="text" name="quantity"
                                                       placeholder="Enter Quantity">
                                            </div>

                                            <div class="form-group">
                                                <label>Enter Purchase Price</label>
                                                <input class="form-control" type="text" name="purchase_price"
                                                       placeholder="Enter Purchase Price">
                                            </div>


                                        </div>

                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-md-right">Add Purchase
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
