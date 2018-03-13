<?php

namespace App\Http\Controllers;
use App;
use App\Course;
use App\Expense;
use App\Loan;
use App\Order;
use App\Enrolement;
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
        $expenses = Expense::count();
        $total_expense = Expense::sum('payment');
        $expense_qty = Expense::count('payment');
        $total_loan = Loan::sum('total_amount') - Loan::sum('payment');
        $others= Order::where("order_cat_id", 3)->sum('payment');
        $individual_income = Order::where("order_cat_id", 11)->sum('payment') + Order::where("order_cat_id", 10)->sum('payment');
        $total_income = Order::sum('payment') + Enrolement::sum('payment') - $others;
        $incomeexpensechart = $this->incomeExpenseChart();
        
        return view('home', compact('orders', 'expenses', 'total_expense', 'total_income', 'total_loan', 'expense_qty', 'individual_income', 'incomeexpensechart'));
    }

    public function search($searchkey)
    {
        $courses = Course::search($searchkey)->get();
        return view('search', compact('courses'));
    }

    private function getDatesOfWeek(){
        $days = array();
        $days[] = date("Y-m-d",strtotime('this week monday'));
        $days[] = date("Y-m-d",strtotime('this week tuesday'));
        $days[] = date("Y-m-d",strtotime('this week wednesday'));
        $days[] = date("Y-m-d",strtotime('this week thursday'));
        $days[] = date("Y-m-d",strtotime('this week friday'));
        $days[] = date("Y-m-d",strtotime('this week saturday'));
        $days[] = date("Y-m-d",strtotime('this week sunday'));

        return $days;
    }

    public function incomeExpenseChart() 
    {        
        $daysOfWeek = $this->getDatesOfWeek();
        $incomes = Order::whereBetween('created_at', [ $daysOfWeek[0].' 00:00:00', $daysOfWeek[6].' 23:59:59'])->get();
        $expenses = Expense::whereBetween('created_at', [ $daysOfWeek[0].' 00:00:00', $daysOfWeek[6].' 23:59:59'])->get();
        //dd($expenses);
        $chartArray = array();
        foreach ($daysOfWeek as $day) {
            $weeklyincome = "0";
            $weeklyexpense = "0";
            foreach ($incomes as $income){
                    $income_date = $income->created_at->format('Y-m-d');
                  if($income_date == $day){  
                    $weeklyincome = Order::whereBetween('created_at', [ $day.' 00:00:00', $day.' 23:59:59'])->sum('payment'); 
                  } 
            }
            foreach ($expenses as $expense){
                $expense_date = $expense->created_at->format('Y-m-d');
                  if($expense_date == $day){  
                    $weeklyexpense = Expense::whereBetween('created_at', [ $day.' 00:00:00', $day.' 23:59:59'])->sum('payment');
                  } 
            }
            $chart = [
                'y' => $day,
                'a' => $weeklyexpense,
                'b'=>$weeklyincome,
            ];
            $chartArray[] =  $chart;
        }
        
       return $chartArray;   
                
    }
}
