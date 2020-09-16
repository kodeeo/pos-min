<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;


Route::get('/login', 'UserController@login')->name('login');
Route::post('/do_login', 'UserController@doLogin')->name('do.login');
Route::get('/register', 'UserController@register')->name('register');
Route::post('/do_register', 'UserController@doRegister')->name('do.register');

//landing page
Route::get('/', 'DashboardController@landing')->name('landing');

//email verification
Route::get('/verify/{token}', 'UserController@verifyEmail')->name('verify');


/* password reset */
Route::get('/forgot-password', 'ForgotPasswordController@index')->name('password.index');
Route::post('/forgot-password/send-email', 'ForgotPasswordController@sendEmail')->name('password.email');
Route::get('/forgot-password/new-password/{token}', 'ForgotPasswordController@show')->name('password.show');
Route::post('/forgot-password/update', 'ForgotPasswordController@update')->name('password.update');


// Admin Group
Route::group(['as'=>'admin.', 'middleware' => 'auth' ], function(){

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/logout', 'UserController@logout')->name('logout');
    Route::resource('employee', 'EmployeeController');
    Route::resource('customer', 'CustomerController');
    Route::resource('attendance', 'AttendanceController');


    Route::put('attendance/{attendance?}', 'AttendanceController@att_update')->name('attendance.att_update');
    Route::resource('supplier', 'SupplierController');
    Route::resource('advanced_salary', 'AdvancedSalaryController');
    Route::resource('salary', 'SalaryController');
    Route::resource('category', 'CategoryController');
    Route::resource('product', 'ProductController');
    Route::resource('expense', 'ExpenseController');
    Route::get('expense-today', 'ExpenseController@today_expense')->name('expense.today');
    Route::get('expense-month/{month?}', 'ExpenseController@month_expense')->name('expense.month');
    Route::get('expense-yearly/{year?}', 'ExpenseController@yearly_expense')->name('expense.yearly');

    Route::get('setting', 'SettingController@index')->name('setting.index');
    Route::put('setting/{id}', 'SettingController@update')->name('setting.update');

    Route::resource('pos', 'PosController');

    Route::get('order/show/{id}', 'OrderController@show')->name('order.show');
    Route::get('order/pending', 'OrderController@pending_order')->name('order.pending');
    Route::get('order/payment/list', 'OrderController@paymentIndex')->name('order.payment.index');
    Route::get('order/approved', 'OrderController@approved_order')->name('order.approved');
    Route::get('order/confirm/{id}', 'OrderController@order_confirm')->name('order.confirm');
    Route::delete('order/delete/{id}', 'OrderController@destroy')->name('order.destroy');
    Route::get('order/download/{id}', 'OrderController@download')->name('order.download');
    Route::post('order/payment/{id}', 'OrderController@payment')->name('order.payment');

    Route::get('sales-today', 'OrderController@today_sales')->name('sales.today');
    Route::get('sales-monthly/{month?}', 'OrderController@monthly_sales')->name('sales.monthly');
    Route::get('sales-total','OrderController@total_sales')->name('sales.total');

    Route::resource('cart', 'CartController');

    Route::post('invoice', 'InvoiceController@create')->name('invoice.create');
    Route::get('print/{customer_id}', 'InvoiceController@print')->name('invoice.print');
    Route::get('order-print/{order_id}', 'InvoiceController@order_print')->name('invoice.order_print');
    Route::post('invoice-final', 'InvoiceController@final_invoice')->name('invoice.final_invoice');

    Route::get('stock', 'StockController@stock')->name('stock.index');
    Route::get('purchase/index', 'PurchaseController@index')->name('purchase.index');
    Route::get('purchase/create', 'PurchaseController@create')->name('purchase.create');
    Route::post('purchase/store', 'PurchaseController@store')->name('purchase.store');

    //barcode
    Route::get('barcode/{id}','BarcodeController@index')->name('barcode');

    //profile
    Route::get('profile','ProfileController@index')->name('profile');
    Route::post('profile/edit','ProfileController@update')->name('profile.update');
    Route::post('profile/edit/password','ProfileController@updatePassword')->name('profile.update.password');

    Route::group(['middleware' => 'admin'], function () {
        Route::resource('user', 'UserController');
    });

});
