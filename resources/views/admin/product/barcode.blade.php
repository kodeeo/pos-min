@extends('layouts.backend.app')

@section('title', 'Show Product')

@push('css')
    <style>
        .code-text{
            font-size: 10px;
            line-height: 0;
        }
    </style>
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
                            <li class="breadcrumb-item active">Show Product Barcode</li>
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
                                <h3 class="card-title">Show Product Barcode</h3>
                            </div>
                            <!-- /.card-header -->

                            <!-- form start -->

                            <div id="printableArea">
                                <div class="card-body">

                                    <div class="row">
                                        @for($x = 1; $x <= $qty; $x++)
                                        <div class="col-md-3 p-2">
                                            <div class="text-center">
                                                <p class="code-text">{{$product->name}}</p>
                                                <p class="code-text">{{$product->selling_price}} Taka</p>
                                                <img src="data:image/png;base64,{{$code}}" />
                                            </div>
                                        </div>
                                            @endfor

                                    </div>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <div class="row pl-3 pr-3">
                                <div class="col-md-6 form-group">
                                    <form action="{{route('admin.barcode',$product->id)}}" method="get">
                                        <input type="number" class="form-control" min="1" name="qty" onchange="this.form.submit()" value="{{$qty}}">
                                    </form>
                                </div>
                                <div class="col-md-6 form-group">
                                    <input class="btn btn-primary form-control" type="button" onclick="printDiv('printableArea')" value="Print !" />
                                </div>
                                  </div>

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
    <script>
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endpush
