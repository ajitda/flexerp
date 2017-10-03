<?php

namespace App\Http\Controllers;
use App;
use App\Course;
use App\Expense;
use App\Loan;
use App\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang=null)
    {
        App::setlocale($lang);
        $orders = Order::count();
        $total_expense = Expense::sum('payment');
        $expense_qty = Expense::count('payment');
        $total_loan = Loan::sum('total_amount');
        $others= Order::where("order_cat_id", 3)->sum('payment');
        $total_income = Order::sum('payment') - $others;
        return view('home', compact('orders', 'total_expense', 'total_income', 'total_loan', 'expense_qty'));
    }

    public function search($searchkey)
    {
        $courses = Course::search($searchkey)->get();
        return view('search', compact('courses'));
    }
}
