<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link">
        <img src="{{ URL::asset('storage/setting/'. $setting->logo) }}" alt="{{$setting->name}}"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{$setting->name}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.dashboard') }}"
                       class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-dashboard"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.pos.index') }}" class="nav-link {{ Request::is('pos') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-shopping-cart"></i>
                        <p>
                            Point of Sales (POS)
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview {{ Request::is('supplier*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('supplier*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-user-o"></i>
                        <p>
                            Supplier
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.supplier.create') }}"
                               class="nav-link {{ Request::is('supplier/create') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Supplier</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.supplier.index') }}"
                               class="nav-link {{ Request::is('supplier') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>All Supplier</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item has-treeview {{ Request::is('category*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('category*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-tag"></i>
                        <p>
                            Category
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.category.create') }}"
                               class="nav-link {{ Request::is('category/create') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.category.index') }}"
                               class="nav-link {{ Request::is('category') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>All Category</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ Request::is('product*') ? 'menu-open' : '' }} {{ Request::is('barcode*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('product*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-product-hunt"></i>
                        <p>
                            Product
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.product.create') }}"
                               class="nav-link {{ Request::is('product/create') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.product.index') }}"
                               class="nav-link {{ Request::is('product') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>All Products</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item has-treeview {{ Request::is('purchase*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('purchase*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-list-ol"></i>
                        <p>
                            Purchase
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.purchase.create') }}"
                               class="nav-link {{ Request::is('purchase/create') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>New Purchase</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.purchase.index') }}"
                               class="nav-link {{ Request::is('purchase/index') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>All Purchase</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.stock.index') }}"
                       class="nav-link {{ Request::is('stock') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-list-alt"></i>
                        <p>
                            Stock
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview {{ Request::is('order*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('order*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-first-order"></i>
                        <p>
                            Order
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.order.pending') }}"
                               class="nav-link {{ Request::is('order/pending') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>All Orders</p>
                            </a>
                        </li>

                    </ul>
                    @if(auth()->user()->role == 'shop' || auth()->user()->role == 'admin')
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.order.payment.index') }}"
                               class="nav-link {{ Request::is('order/payment/list') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>All Payments</p>
                            </a>
                        </li>
                    </ul>
                        @endif
                </li>

                @if(auth()->user()->role == 'shop' || auth()->user()->role == 'admin')
                <li class="nav-item has-treeview {{ Request::is('sales*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('sales*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-pie-chart"></i>
                        <p>
                            Sales Report
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.sales.today') }}"
                               class="nav-link {{ Request::is('sales-today') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Today's Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.sales.monthly') }}"
                               class="nav-link {{ Request::is('sales-monthly*') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Monthly Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.sales.total') }}"
                               class="nav-link {{ Request::is('sales-total') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Total Sales</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item has-treeview {{ Request::is('customer/*') ? 'menu-open' : '' }} {{ Request::is('customer*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('customer/*') ? 'active' : '' }} {{ Request::is('customer*') ? 'menu-open' : '' }}">
                        <i class="nav-icon fa fa-user-circle"></i>
                        <p>
                            Customer
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.customer.create') }}"
                               class="nav-link {{ Request::is('customer/create') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Customer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.customer.index') }}"
                               class="nav-link {{ Request::is('customer') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>All Customer</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ Request::is('expense*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('expense*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-pie-chart"></i>
                        <p>
                            Expense
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.expense.create') }}"
                               class="nav-link {{ Request::is('expense/create') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Expense</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.expense.today') }}"
                               class="nav-link {{ Request::is('expense-today') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Today Expense</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.expense.month') }}"
                               class="nav-link {{ Request::is('expense-month*') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Monthly Expense</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.expense.yearly') }}"
                               class="nav-link {{ Request::is('expense-yearly*') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Yearly Expense</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.expense.index') }}"
                               class="nav-link {{ Request::is('expense') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>All Expense</p>
                            </a>
                        </li>
                    </ul>
                </li>

                @if(auth()->user()->role == 'admin')
                    <li class="nav-item has-treeview {{ Request::is('user*') ? 'menu-open' : '' }}
                    {{ Request::is('employee*') ? 'menu-open' : '' }}{{ Request::is('shop*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ Request::is('user*') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-user-plus"></i>
                            <p>
                                User
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.user.index') }}"
                                   class="nav-link {{ Request::is('user') ? 'active' : '' }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>All Users</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.shop') }}"
                                   class="nav-link {{ Request::is('shop') ? 'active' : '' }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>All Shops</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.employee.index') }}"
                                   class="nav-link {{ Request::is('employee') ? 'active' : '' }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>Employees</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @elseif(auth()->user()->role == 'shop')
                    <li class="nav-item">
                        <a href="{{ route('admin.employee.index') }}"
                           class="nav-link {{ Request::is('employee') ? 'active' : '' }}">
                            <i class="fa fa-circle-o nav-icon"></i>
                            <p>Employee</p>
                        </a>
                    </li>
                @endif

                @endif

                <li class="nav-header">MENU</li>
                @if(auth()->user()->role == 'admin' || auth()->user()->role == 'shop')
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.setting.index') }}"
                       class="nav-link {{ Request::is('setting') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-server"></i>
                        <p>
                            Setting
                        </p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.logout') }}">
                        <i class="nav-icon fa fa-sign-out"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
