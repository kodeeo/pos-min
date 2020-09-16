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
    {{--		<!-- Sidebar user panel (optional) -->--}}
    {{--		<div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
    {{--			<div class="image">--}}
    {{--				<img src="{{ asset('assets/backend/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">--}}
    {{--			</div>--}}
    {{--			<div class="info">--}}
    {{--				<a href="#" class="d-block">Foysal</a>--}}
    {{--			</div>--}}
    {{--		</div>--}}

    <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.dashboard') }}"
                       class="nav-link {{ Request::is('admin/dashboard') ? 'active' : '' }}">
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


                <li class="nav-item has-treeview {{ Request::is('admin/category*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/category*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-tag"></i>
                        <p>
                            Category
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.category.create') }}"
                               class="nav-link {{ Request::is('admin/category/create') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.category.index') }}"
                               class="nav-link {{ Request::is('admin/category') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>All Category</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ Request::is('admin/product*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/product*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-product-hunt"></i>
                        <p>
                            Product
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.product.create') }}"
                               class="nav-link {{ Request::is('admin/product/create') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.product.index') }}"
                               class="nav-link {{ Request::is('admin/product') ? 'active' : '' }}">
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
                       class="nav-link {{ Request::is('admin/stock') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-list-alt"></i>
                        <p>
                            Stock
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview {{ Request::is('admin/sales*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/sales*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-pie-chart"></i>
                        <p>
                            Sales Report
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.sales.today') }}"
                               class="nav-link {{ Request::is('admin/sales-today') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Today's Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.sales.monthly') }}"
                               class="nav-link {{ Request::is('admin/sales-monthly*') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Monthly Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.sales.total') }}"
                               class="nav-link {{ Request::is('admin/sales-total') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Total Sales</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item has-treeview {{ Request::is('admin/order*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/order*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-first-order"></i>
                        <p>
                            Order
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.order.pending') }}"
                               class="nav-link {{ Request::is('admin/order/pending') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>All Orders</p>
                            </a>
                        </li>

                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.order.payment.index') }}"
                               class="nav-link {{ Request::is('admin/order/payment') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>All Payments</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview {{ Request::is('admin/customer*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/customer*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-user-circle"></i>
                        <p>
                            Customer
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.customer.create') }}"
                               class="nav-link {{ Request::is('admin/customer/create') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Customer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.customer.index') }}"
                               class="nav-link {{ Request::is('admin/customer') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>All Customer</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{ Request::is('admin/expense*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ Request::is('admin/expense*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-pie-chart"></i>
                        <p>
                            Expense
                            <i class="right fa fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.expense.create') }}"
                               class="nav-link {{ Request::is('admin/expense/create') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Add Expense</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.expense.today') }}"
                               class="nav-link {{ Request::is('admin/expense-today') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Today Expense</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.expense.month') }}"
                               class="nav-link {{ Request::is('admin/expense-month*') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Monthly Expense</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.expense.yearly') }}"
                               class="nav-link {{ Request::is('admin/expense-yearly*') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Yearly Expense</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.expense.index') }}"
                               class="nav-link {{ Request::is('admin/expense') ? 'active' : '' }}">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>All Expense</p>
                            </a>
                        </li>
                    </ul>
                </li>

                @if(auth()->user()->role == 'admin')
                    <li class="nav-item has-treeview {{ Request::is('admin/user*') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ Request::is('admin/user*') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-user-plus"></i>
                            <p>
                                User
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.user.index') }}"
                                   class="nav-link {{ Request::is('admin/user') ? 'active' : '' }}">
                                    <i class="fa fa-circle-o nav-icon"></i>
                                    <p>All User</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item has-treeview">
                        <a href="{{ route('admin.profile') }}"
                           class="nav-link {{ Request::is('admin/stock') ? 'active' : '' }}">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                Profile
                            </p>
                        </a>
                    </li>
                @endif

                <li class="nav-header">MENU</li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.setting.index') }}"
                       class="nav-link {{ Request::is('admin/setting') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-server"></i>
                        <p>
                            Setting
                        </p>
                    </a>
                </li>
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
