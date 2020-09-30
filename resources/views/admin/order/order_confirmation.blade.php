@extends('layouts.backend.app')

@section('title', 'Order')

@push('css')
    <style>
        .modal-lg {
            max-width: 50% !important;
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
                    <div class="col-sm-6">
                        <h1>Order Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Order Details</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        <i class="fa fa-globe"></i> {{ config('app.name') }}
                                        <small class="float-right">Date: {{ date('l, d-M-Y h:i:s A') }}</small>
                                    </h4>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-4 invoice-col">
                                    From
                                    <address>
                                        <strong>{{auth()->user()->name}}, {{$company->name}}</strong><br>
                                        {{ $company->address }}<br>
                                        {{ $company->city }} - {{ $company->zip_code }}, {{ $company->country }}<br>
                                        Phone: {{ $company->mobile }} {{ $company->phone !== null ? $company->phone : ''  }}
                                        <br>
                                        Email: {{ $company->email }}
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    To
                                    <address>

                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <b>Invoice #{{ $order->invoice_no }}</b><br><br>
                                    <b>Order ID:</b> {{ str_pad($order->id,9,"0",STR_PAD_LEFT) }}<br>
                                    <b>Payment Status:</b> <span
                                        class="badge {{ $order->payment_status == 'paid' ? 'badge-success' : 'badge-warning'  }}">{{ $order->payment_status }}</span><br>

                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Product Name</th>
                                            <th>Product Code</th>
                                            <th>Quantity</th>
                                            <th>Unit Cost</th>
                                            <th>Subtotal</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($order_details as $order_detail)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $order_detail->product->name }}</td>
                                                <td>{{ $order_detail->product->code }}</td>
                                                <td>{{ $order_detail->quantity }}</td>
                                                <td>{{ $unit_cost = number_format($order_detail->unit_cost, 2) }}</td>
                                                <td>{{ number_format($unit_cost * $order_detail->quantity, 2) }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-4">
                                    <div class="table-responsive">
                                        {{--                                        <table class="table table-bordered">--}}
                                        {{--                                            <tr>--}}
                                        {{--                                                <th style="width:50%">Payment Method:</th>--}}
                                        {{--                                                <td class="text-right">{{ $order->payment_status }}</td>--}}
                                        {{--                                            </tr>--}}
                                        {{--                                            <tr>--}}
                                        {{--                                                <th>Pay</th>--}}
                                        {{--                                                <td class="text-right">{{ number_format($order->pay, 2) }}</td>--}}
                                        {{--                                            </tr>--}}
                                        {{--                                            <tr>--}}
                                        {{--                                                <th>Due</th>--}}
                                        {{--                                                <td class="text-right">{{ number_format($order->due, 2) }}</td>--}}
                                        {{--                                            </tr>--}}
                                        {{--                                        </table>--}}

                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-4 offset-4">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <th style="width:50%">Subtotal:</th>
                                                <td class="text-right">{{ number_format($order->sub_total, 2) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Tax ({{$company->tax}}%)</th>
                                                <td class="text-right">{{ number_format($order->vat, 2) }}</td>
                                            </tr>
                                            <tr>
                                                <th>Total:</th>
                                                <td class="text-right">{{ round($order->total) }} Taka</td>
                                            </tr>
                                            <tr>
                                                <th>Paid:</th>
                                                <td class="text-right">{{ round($order->pay) }} Taka</td>
                                            </tr>
                                            <tr>
                                                <th>Due:</th>
                                                <td class="text-right">{{ round($order->due) }} Taka</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class="col-12">

                                    <a href="{{ route('admin.invoice.order_print', $order->id) }}" target="_blank"
                                       class="btn btn-primary">
                                        <i class="fa fa-print"></i> Print
                                    </a>
                                @if($order->due > 0)
                                    <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-secondary" data-toggle="modal"
                                                data-target="#exampleModal">
                                            Do Payment
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Create
                                                            Payment</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{route('admin.order.payment',$order->id)}}"
                                                          method="post">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="method">Select Method</label>
                                                                <select class="form-control" name="method" id="method">
                                                                    <option value="cash">Cash</option>
                                                                    <option value="mobile">Mobile Banking</option>
                                                                    <option value="check">Check</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pay">Pay</label>
                                                                <input type="number" min="1" class="form-control"
                                                                       id="pay" name="pay" placeholder="Enter Amount"
                                                                       value="{{$order->due}}">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">Submit
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    @endif
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                            data-target=".bd-example-modal-lg">Payment History
                                    </button>


                                    <!-- Modal -->
                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                         aria-labelledby="paymentModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Payment History</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Main content -->
                                                    <section class="content">
                                                        <div class="container-fluid">
                                                            <div class="row">
                                                                <!-- left column -->
                                                                <div class="col-md-12">
                                                                    <!-- general form elements -->
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h3 class="card-title">PAYMENT HISTORY</h3>
                                                                        </div>
                                                                        <!-- /.card-header -->
                                                                        <div class="card-body">
                                                                            <table id="example1" class="table table-bordered table-striped text-center table-responsive-xl">
                                                                                <thead>
                                                                                <tr>
                                                                                    <th>Serial</th>
                                                                                    {{--                                        <th>Name</th>--}}
                                                                                    <th>Date</th>
                                                                                    <th>Invoice No</th>
                                                                                    <th>Pay</th>
                                                                                    <th>Return</th>
                                                                                    <th>Due</th>
                                                                                    <th>Method</th>
                                                                                </tr>
                                                                                </thead>
                                                                                <tfoot>
                                                                                <tr>
                                                                                    <th>Serial</th>
                                                                                    {{--                                        <th>Name</th>--}}
                                                                                    <th>Date</th>
                                                                                    <th>Invoice No</th>
                                                                                    <th>Pay</th>
                                                                                    <th>Return</th>
                                                                                    <th>Due</th>
                                                                                    <th>Method</th>
                                                                                </tr>
                                                                                </tfoot>
                                                                                <tbody>
                                                                                @foreach($payments as $key => $payment)
                                                                                    <tr>
                                                                                        <td>{{ $key + 1 }}</td>
                                                                                        <td>{{ $payment->created_at->toFormattedDateString() }}</td>
                                                                                        <td>{{ $payment->order->invoice_no }}</td>
                                                                                        <td>{{ $payment->pay }}</td>
                                                                                        <td>{{$payment->return}}</td>
                                                                                        <td>{{$payment->due}}</td>
                                                                                        <td>{{$payment->method}}</td>
                                                                                    </tr>
                                                                                @endforeach
                                                                                </tbody>

                                                                            </table>
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
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    {{--                                        <a href="{{ route('admin.order.download', $order->id) }}" target="_blank" class="btn btn-primary float-right" style="margin-right: 5px;">--}}
                                    {{--                                            <i class="fa fa-download"></i> Generate PDF--}}
                                    {{--                                        </a>--}}

                                </div>
                            </div>
                        </div>
                        <!-- /.invoice -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->





@endsection



@push('js')

@endpush
