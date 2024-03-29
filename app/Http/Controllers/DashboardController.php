<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Order;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{


    public function index()
    {
        //dd(auth()->user()->setting);
        $today_date = date('Y-m-d');
        $today = Order::where('setting_id',auth()->user()->setting->id)->whereDate('created_at', $today_date)->get();
        $yesterday = Order::where('setting_id',auth()->user()->setting->id)->whereDate('created_at', date('Y-m-d', strtotime('-1 day')))->get();

        $month_date = date('m');
        $month = Order::where('setting_id',auth()->user()->setting->id)->whereMonth('created_at', $month_date)->get();
        $previous_month = Order::where('setting_id',auth()->user()->setting->id)->whereMonth('created_at', date('m', strtotime('-1 month')))->get();

        $year_date = date('Y');
        $year = Order::where('setting_id',auth()->user()->setting->id)->whereYear('created_at', $year_date)->get();
        $previous_year = Order::where('setting_id',auth()->user()->setting->id)->whereYear('created_at', date('Y', strtotime('-1 year')))->get();

        $sales = Order::where('setting_id',auth()->user()->setting->id)->get();

        $today_expenses = Expense::where('setting_id',auth()->user()->setting->id)->whereDate('created_at', $today_date)->get();
        $yesterday_expenses = Expense::where('setting_id',auth()->user()->setting->id)->whereDate('created_at', date('Y-m-d', strtotime('-1 day')))->get();

        $month_expenses = Expense::where('setting_id',auth()->user()->setting->id)->whereMonth('created_at', $month_date)->get();
        $previous_month_expenses = Expense::where('setting_id',auth()->user()->setting->id)->whereMonth('created_at', date('m', strtotime('-1 month')))->get();

        $year_expenses = Expense::where('setting_id',auth()->user()->setting->id)->whereYear('created_at', $year_date)->get();
        $previous_year_expenses = Expense::where('setting_id',auth()->user()->setting->id)->whereYear('created_at', date('Y', strtotime('-1 year')))->get();

        $expenses = Expense::where('setting_id',auth()->user()->setting->id)->get();

        // for charts
        $current_sales = Order::select(
            DB::raw('sum(total) as sums'),
            DB::raw("DATE_FORMAT(created_at,'%m') as months"),
            DB::raw("DATE_FORMAT(created_at,'%Y') as year"))
            ->whereYear('created_at',  date('Y'))
            ->groupBy('months')
            ->where('setting_id',auth()->user()->setting->id)->get();

        $current_expenses = Expense::select(
            DB::raw('sum(amount) as sums'),
            DB::raw("DATE_FORMAT(created_at,'%m') as months"),
            DB::raw("DATE_FORMAT(created_at,'%Y') as year"))
            ->whereYear('created_at',  date('Y'))
            ->groupBy('months')->where('setting_id',auth()->user()->setting->id)->get();


        return view('admin.dashboard', compact('today','yesterday' ,'month','previous_month', 'year', 'previous_year', 'sales', 'today_expenses', 'yesterday_expenses', 'month_expenses', 'previous_month_expenses', 'year_expenses', 'previous_year_expenses', 'expenses', 'current_sales', 'current_expenses'));
    }

    public function landing()
    {
        return view('admin.landing');
    }
}
