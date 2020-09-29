@extends('layouts.backend.app')

@section('title', 'Pos')

@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/backend/plugins/datatables/dataTables.bootstrap4.css') }}">
    <style>
        .calculator {
            padding: 10px;
            -webkit-box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.2);
            box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.2);
            border-radius: 1px;
        }

        .input {
            border: 1px solid #ddd;
            border-radius: 1px;
            height: 100px;
            padding-right: 15px;
            padding-top: 10px;
            text-align: right;
            margin-right: 6px;
            font-size: 2.5rem;
            overflow-x: auto;
            transition: all .2s ease-in-out;
        }

        .input:hover {
            border: 1px solid #bbb;
            -webkit-box-shadow: inset 0px 1px 4px 0px rgba(0, 0, 0, 0.2);
            box-shadow: inset 0px 1px 4px 0px rgba(0, 0, 0, 0.2);
        }

        .buttons {
        }

        .operators {
        }

        .operators div {
            display: inline-block;
            border: 1px solid #bbb;
            border-radius: 1px;
            width: 80px;
            text-align: center;
            padding: 10px;
            margin: 20px 4px 10px 0;
            cursor: pointer;
            background-color: #ddd;
            transition: border-color .2s ease-in-out, background-color .2s, box-shadow .2s;
        }

        .operators div:hover {
            background-color: #ddd;
            -webkit-box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.2);
            box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.2);
            border-color: #aaa;
        }

        .operators div:active {
            font-weight: bold;
        }

        .leftPanel {
            display: inline-block;
        }

        .numbers div {
            display: inline-block;
            border: 1px solid #ddd;
            border-radius: 1px;
            width: 80px;
            text-align: center;
            padding: 10px;
            margin: 10px 4px 10px 0;
            cursor: pointer;
            background-color: #f9f9f9;
            transition: border-color .2s ease-in-out, background-color .2s, box-shadow .2s;
        }

        .numbers div:hover {
            background-color: #f1f1f1;
            -webkit-box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.2);
            box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.2);
            border-color: #bbb;
        }

        .numbers div:active {
            font-weight: bold;
        }

        div.equal {
            display: inline-block;
            border: 1px solid #3079ED;
            border-radius: 1px;
            width: 20%;
            text-align: center;
            padding: 137px 10px;
            margin: 10px 6px 10px 0;
            vertical-align: top;
            cursor: pointer;
            color: #FFF;
            background-color: #4d90fe;
            transition: all .2s ease-in-out;
        }

        div.equal:hover {
            background-color: #307CF9;
            -webkit-box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.2);
            box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.2);
            border-color: #1857BB;
        }

        div.equal:active {
            font-weight: bold;
        }
    </style>
@endpush

@section('content')
    @php
        $setting=auth()->user()->setting;
    @endphp
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <!-- Button trigger modal -->
                        <button title="Calculator" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-calculator" style="font-size: 20px"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Calculator</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="" style="  width: 400px; margin: 4% auto; font-family: 'Source Sans Pro', sans-serif;letter-spacing: 5px;font-size: 1.8rem;-moz-user-select: none;-webkit-user-select: none;-ms-user-select: none;">
                                            <div class="calculator">
                                                <div class="input" id="input"></div>
                                                <div class="buttons">
                                                    <div class="operators">
                                                        <div>+</div>
                                                        <div>-</div>
                                                        <div>&times;</div>
                                                        <div>&divide;</div>
                                                    </div>
                                                    <div class="leftPanel">
                                                        <div class="numbers">
                                                            <div>7</div>
                                                            <div>8</div>
                                                            <div>9</div>
                                                        </div>
                                                        <div class="numbers">
                                                            <div>4</div>
                                                            <div>5</div>
                                                            <div>6</div>
                                                        </div>
                                                        <div class="numbers">
                                                            <div>1</div>
                                                            <div>2</div>
                                                            <div>3</div>
                                                        </div>
                                                        <div class="numbers">
                                                            <div>0</div>
                                                            <div>.</div>
                                                            <div id="clear">C</div>
                                                        </div>
                                                    </div>
                                                    <div class="equal" id="result">=</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Pos</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xl-6  ">
                        <!-- general form elements -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">POS</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class=" table-responsive table table-bordered table-striped text-center">
                                    <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Name</th>
                                        {{--                                        <th>Category</th>--}}
                                        <th class="d-lg-table-cell d-none d-xl-table-cell sorting">Image</th>
                                        <th>Price</th>
                                        {{--                                        <th>Product Code</th>--}}
                                        <th>Add To Cart</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Code</th>
                                        <th>Name</th>
                                        {{--                                        <th>Category</th>--}}
                                        <th class="d-lg-table-cell d-none d-xl-table-cell sorting">Image</th>
                                        <th>Price</th>
                                        {{--                                        <th>Product Code</th>--}}
                                        <th>Add To Cart</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($products as $key => $product)
                                        <tr>
                                            <form action="{{ route('admin.cart.store') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $product->id }}">
                                                <input type="hidden" name="name" value="{{ $product->name }}">
                                                <input type="hidden" name="qty" value="1">
                                                <input type="hidden" name="price" value="{{ $product->selling_price }}">

                                                <td>{{ $product->code }}</td>
                                                <td>{{ $product->name }}</td>
                                                {{--                                                <td>{{ $product->category->name }}</td>--}}
                                                <td class="d-lg-table-cell d-none d-xl-table-cell">
                                                    <img width="40" height="40" class="img-fluid"
                                                         src="{{ URL::asset('storage/product/'. $product->image) }}"
                                                         alt="{{ $product->name }}">
                                                </td>
{{--                                                <td>{{ number_format($product->selling_price, 2) }}</td>--}}
                                                <td>
                                                    <input type="number" class="form-control" name="price" value="{{ $product->selling_price }}">
                                                </td>
                                                <td>
                                                    <button id="myBtn" type="submit"
                                                            class="btn btn-sm btn-success px-2">
                                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </form>
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

                    <!-- left column -->
                    <div class="col-xl-6">
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fa fa-info"></i>
                                    Shopping Lists

                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if($cart_products->count() < 1)
                                    <div class="alert alert-danger">
                                        No Product Added
                                    </div>
                                @else
                                    <table class="mb-3 table table-bordered table-responsive text-center">
                                        <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>Name</th>
                                            <th width="17%">Qty</th>
                                            <th>Price</th>
                                            <th>Sub Total</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($cart_products as $product)
                                            @php
                                                $stock = App\Models\Stock::where('product_id',$product->id)->first();
                                            @endphp
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="text-left">{{ $product->name }}</td>

                                                <form action="{{ route('admin.cart.update', $product->rowId) }}"
                                                      method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <td>
                                                        <input type="number" name="qty" min="1"
                                                               max="{{$stock->quantity}}" class="form-control"
                                                               value="{{ $product->qty }}">
                                                    </td>
                                                    <td>{{ $price = number_format($product->price, 2) }}</td>
                                                    <td>{{ $price * $product->qty }}</td>
                                                    <td>
                                                        <button type="submit" class="btn btn-sm btn-success">
                                                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                        </button>
                                                    </td>
                                                </form>

                                                <td>
                                                    <button class="btn btn-danger" type="button"
                                                            onclick="deleteItem({{ $product->id }})">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </button>
                                                    <form id="delete-form-{{ $product->id }}"
                                                          action="{{ route('admin.cart.destroy', $product->rowId) }}"
                                                          method="post"
                                                          style="display:none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                @endif

                                <div style="text-align: right;" class="alert alert-info">
                                    <p>Quantity : {{ Cart::count() }}</p>
                                    <p>Sub Total : {{ Cart::subtotal() }} Taka</p>
                                    Tax ({{$setting->tax}}%) : {{ Cart::tax() }} Taka
                                </div>
                                <div style="text-align: right;" class="alert alert-success">
                                    Total : {{ Cart::total() }} Taka
                                </div>
                            </div>
                            <form action="{{ route('admin.invoice.final_invoice') }}" method="post" role="form">
                                @csrf
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <div class="form-group">
                                            <label for="method">Select Method<span class="required ml-1" style="color: red">*</span></label>
                                            <select class="form-control" name="method" id="method">
                                                <option value="cash">Cash</option>
                                                <option value="mobile">Mobile Banking</option>
                                                <option value="check">Check</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="pay">Pay<span class="required ml-1" style="color: red">*</span></label>
                                            <input required class="form-control pay" id="pay" type="number" name="pay"
                                                   placeholder="Enter paid amount" >
                                        </div>
                                        <div class="form-group">
                                            <label for="customer">Select Customer</label>
                                            <select class="form-control" name="customer_id" id="customer">
                                                <option value="{{null}}">Unknown</option>
                                                @foreach($customers as $customer)
                                                    <option value="{{$customer->id}}">{{$customer->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div style="text-align: right;" id="return" class="alert alert-primary">

                                        </div>
                                        <span>
                                            <button type="submit" class="btn btn-sm btn-info float-md-right ml-3">Create Invoice</button>
{{--                                            <a href="{{ route('admin.customer.create') }}" class="btn btn-sm btn-primary float-md-right">Add New</a>--}}
                                        </span>
                                    </h3>

                                </div>
                                <!-- /.card-body -->
                            </form>
                        </div>
                    </div>
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

        $(document).ready(function () {
            var table = $('#example1').DataTable();
            $('.dataTables_filter input').on('keypress', function (e) {
                if (e.keyCode == 13) {
                    if (table.rows({search: 'applied'}).count() == 1) {
                        document.getElementById('myBtn').click();
                    } else {
                        alert('Get many results. Please add manually.')
                    }

                }
            });

        });


        $(document).ready(function () {
            $('.pay').keyup(function () {
                return_amount = 0;
                total =
                {{str_replace(',','',Cart::total())}}
                if ($.isNumeric($(this).val())) {
                    return_amount = total - $(this).val();
                }
                $('#return').html('Return is : ' + Number.parseFloat(return_amount).toFixed(2));
            });
        });
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
                    document.getElementById('delete-form-' + id).submit();
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

        "use strict";

        var input = document.getElementById('input'), // input/output button
            number = document.querySelectorAll('.numbers div'), // number buttons
            operator = document.querySelectorAll('.operators div'), // operator buttons
            result = document.getElementById('result'), // equal button
            clear = document.getElementById('clear'), // clear button
            resultDisplayed = false; // flag to keep an eye on what output is displayed

        // adding click handlers to number buttons
        for (var i = 0; i < number.length; i++) {
            number[i].addEventListener("click", function (e) {

                // storing current input string and its last character in variables - used later
                var currentString = input.innerHTML;
                var lastChar = currentString[currentString.length - 1];

                // if result is not diplayed, just keep adding
                if (resultDisplayed === false) {
                    input.innerHTML += e.target.innerHTML;
                } else if (resultDisplayed === true && lastChar === "+" || lastChar === "-" || lastChar === "×" || lastChar === "÷") {
                    // if result is currently displayed and user pressed an operator
                    // we need to keep on adding to the string for next operation
                    resultDisplayed = false;
                    input.innerHTML += e.target.innerHTML;
                } else {
                    // if result is currently displayed and user pressed a number
                    // we need clear the input string and add the new input to start the new opration
                    resultDisplayed = false;
                    input.innerHTML = "";
                    input.innerHTML += e.target.innerHTML;
                }

            });
        }

        // adding click handlers to number buttons
        for (var i = 0; i < operator.length; i++) {
            operator[i].addEventListener("click", function (e) {

                // storing current input string and its last character in variables - used later
                var currentString = input.innerHTML;
                var lastChar = currentString[currentString.length - 1];

                // if last character entered is an operator, replace it with the currently pressed one
                if (lastChar === "+" || lastChar === "-" || lastChar === "×" || lastChar === "÷") {
                    var newString = currentString.substring(0, currentString.length - 1) + e.target.innerHTML;
                    input.innerHTML = newString;
                } else if (currentString.length == 0) {
                    // if first key pressed is an opearator, don't do anything
                    console.log("enter a number first");
                } else {
                    // else just add the operator pressed to the input
                    input.innerHTML += e.target.innerHTML;
                }

            });
        }

        // on click of 'equal' button
        result.addEventListener("click", function () {

            // this is the string that we will be processing eg. -10+26+33-56*34/23
            var inputString = input.innerHTML;

            // forming an array of numbers. eg for above string it will be: numbers = ["10", "26", "33", "56", "34", "23"]
            var numbers = inputString.split(/\+|\-|\×|\÷/g);

            // forming an array of operators. for above string it will be: operators = ["+", "+", "-", "*", "/"]
            // first we replace all the numbers and dot with empty string and then split
            var operators = inputString.replace(/[0-9]|\./g, "").split("");

            console.log(inputString);
            console.log(operators);
            console.log(numbers);
            console.log("----------------------------");

            // now we are looping through the array and doing one operation at a time.
            // first divide, then multiply, then subtraction and then addition
            // as we move we are alterning the original numbers and operators array
            // the final element remaining in the array will be the output

            var divide = operators.indexOf("÷");
            while (divide != -1) {
                numbers.splice(divide, 2, numbers[divide] / numbers[divide + 1]);
                operators.splice(divide, 1);
                divide = operators.indexOf("÷");
            }

            var multiply = operators.indexOf("×");
            while (multiply != -1) {
                numbers.splice(multiply, 2, numbers[multiply] * numbers[multiply + 1]);
                operators.splice(multiply, 1);
                multiply = operators.indexOf("×");
            }

            var subtract = operators.indexOf("-");
            while (subtract != -1) {
                numbers.splice(subtract, 2, numbers[subtract] - numbers[subtract + 1]);
                operators.splice(subtract, 1);
                subtract = operators.indexOf("-");
            }

            var add = operators.indexOf("+");
            while (add != -1) {
                // using parseFloat is necessary, otherwise it will result in string concatenation :)
                numbers.splice(add, 2, parseFloat(numbers[add]) + parseFloat(numbers[add + 1]));
                operators.splice(add, 1);
                add = operators.indexOf("+");
            }

            input.innerHTML = numbers[0]; // displaying the output

            resultDisplayed = true; // turning flag if result is displayed
        });

        // clearing the input on press of clear
        clear.addEventListener("click", function () {
            input.innerHTML = "";
        })
    </script>

@endpush
