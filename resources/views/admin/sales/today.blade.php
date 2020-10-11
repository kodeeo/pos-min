 @extends('layouts.backend.app')

@section('title', 'Today\'s Sales')

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/backend/plugins/datatables/dataTables.bootstrap4.css') }}">
@endpush

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 offset-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Today's Sales</li>
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
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    TODAY'S SALES LISTS
                                    <small class="text-danger pull-right">
                                        @php
                                            $total=0;
                                        @endphp
                                        @foreach($products as $product)
                                            @php
                                                $total+=$product->orderDetail->sum('total');
                                            @endphp
                                            @endforeach
                                        <span class="badge badge-info">Total Sales : {{ $total }} Taka</span>
{{--                                        <span class="badge badge-success">Paid : {{ $balance->sum('pay') }} Euro</span>--}}
{{--                                        <span class="badge badge-warning">Due : {{ $balance->sum('due') }} Euro</span>--}}
                                    </small>
                                    <small class="text-primary">{{ date('d F Y') }}</small>
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped text-center table-responsive-sm">
                                    <thead>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Product Title</th>
                                        <th>Image</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Purchase Price</th>
                                        <th>Profit/ <span class="text-danger">Loss</span> </th>
                                        <th>Profit/ <span class="text-danger">Loss</span>(%)</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Serial</th>
                                        <th>Product Title</th>
                                        <th>Image</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Purchase Price</th>
                                        <th>Profit/ <span class="text-danger">Loss</span> </th>
                                        <th>Profit/ <span class="text-danger">Loss</span>(%)</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @php
                                    $totalPrice=0;
                                    $totalProfit=0;
                                    @endphp

                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>
                                                <img class="img-rounded" width="40" height="30" src="{{ URL::asset('storage/product/'. $product->image) }}" alt="{{ $product->name }}">
                                            </td>
{{--                                            <td>{{ $order->customer_name }}</td>--}}
                                            <td>{{ $product->orderDetail->sum('quantity') }}</td>
                                            <td>{{ number_format($product->orderDetail->sum('total'), 2) }}</td>
                                            <td>{{ number_format($product->orderDetail->sum('purchase_price'), 2) }}</td>
                                            <td class="{{$product->orderDetail->sum('profit')<0?'text-danger':''}}">
                                                {{ number_format($product->orderDetail->sum('profit'), 2) }}
                                            </td>
                                            <td class="{{$product->orderDetail->sum('profit')<0?'text-danger':''}}">
                                                {{ number_format(($product->orderDetail->sum('profit') / $product->orderDetail->sum('purchase_price')) * 100).'%' }}
                                            </td>
                                        </tr>
                                        @php
                                            $totalPrice+=number_format($product->orderDetail->sum('total'), 2);
                                            $totalProfit+=number_format($product->orderDetail->sum('profit'), 2);
                                        @endphp
                                    @endforeach
                                    </tbody>
                                </table>

                                <div class="row">
                                    <div class="col-md-8"></div>
                                    <div class="col-md-4">
                                        <table  class="table table-bordered table-striped text-center table-responsive-sm mt-3">
                                            <tbody>
                                            <tr>
                                                <td>Total Sale</td>
                                                <td>{{ $totalPrice }}</td>
                                            </tr>
                                            <tr>
                                                <td>Total Profit/ <span class="text-danger">Loss</span> </td>
                                                <td class="{{$totalProfit<0?'text-danger':''}}">
                                                    {{ $totalProfit }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Total Expense</td>
                                                <td>{{ $today_expenses->sum('amount') }}</td>
                                            </tr>
                                            <tr>
                                                <td>Net Profit/ <span class="text-danger">Loss</span> </td>
                                                <td class="{{$totalProfit- $today_expenses->sum('amount') <0?'text-danger':''}}">
                                                    {{ $totalProfit- $today_expenses->sum('amount')}}
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>



                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div> <!-- Content Wrapper end -->
@endsection




@push('js')

    <!-- DataTables -->
    <script src="{{ asset('assets/backend/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/backend/plugins/datatables/dataTables.bootstrap4.js') }}"></script>
    <!-- SlimScroll -->
    <script src="{{ asset('assets/backend/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/backend/plugins/fastclick/fastclick.js') }}"></script>

    <!-- Sweet Alert Js -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.1/dist/sweetalert2.all.min.js"></script>


    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>


    <script type="text/javascript">
        function deleteItem(id) {
            const swalWithBootstrapButtons = swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
            })

            swalWithBootstrapButtons({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>



@endpush
