<?php

namespace App\Http\Controllers;
use App;
use App\Course;
use App\Expense;
use App\Loan;
use App\Order;
use App\Enrolement;
use App\User;
use App\Role;
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
        $total_loan = Loan::where(['loan_type'=> 0])->sum('total_amount') - Loan::sum('payment');
        $others= Order::where("order_cat_id", 3)->sum('payment');
        $individual_income = Order::where("order_cat_id", 11)->sum('payment') + Order::where("order_cat_id", 10)->sum('payment');
        $total_income = Order::sum('payment') + Enrolement::sum('payment') - $others;
        $incomeexpensechart = $this->incomeExpenseChart();
        $pieChart = $this->pieChart();
        //dd($pieChart);
        return view('home', compact('orders', 'expenses', 'total_expense', 'total_income', 'total_loan', 'expense_qty', 'individual_income', 'incomeexpensechart', 'pieChart'));
    }

    public function search($searchkey)
    {
        $courses = Course::search($searchkey)->get();
        return view('search', compact('courses'));
    }

    private function getDatesOfWeek(){
        $days = array();
        $days[] = date("Y-m-d",strtotime('-29 days'));
        $days[] = date("Y-m-d",strtotime('-28 days'));
        $days[] = date("Y-m-d",strtotime('-27 days'));
        $days[] = date("Y-m-d",strtotime('-26 days'));
        $days[] = date("Y-m-d",strtotime('-25 days'));
        $days[] = date("Y-m-d",strtotime('-24 days'));
        $days[] = date("Y-m-d",strtotime('-23 days'));
        $days[] = date("Y-m-d",strtotime('-22 days'));
        $days[] = date("Y-m-d",strtotime('-21 days'));
        $days[] = date("Y-m-d",strtotime('-20 days'));
        $days[] = date("Y-m-d",strtotime('-19 days'));
        $days[] = date("Y-m-d",strtotime('-18 days'));
        $days[] = date("Y-m-d",strtotime('-17 days'));
        $days[] = date("Y-m-d",strtotime('-16 days'));
        $days[] = date("Y-m-d",strtotime('-15 days'));
        $days[] = date("Y-m-d",strtotime('-14 days'));
        $days[] = date("Y-m-d",strtotime('-13 days'));
        $days[] = date("Y-m-d",strtotime('-12 days'));
        $days[] = date("Y-m-d",strtotime('-11 days'));
        $days[] = date("Y-m-d",strtotime('-10 days'));
        $days[] = date("Y-m-d",strtotime('-9 days'));
        $days[] = date("Y-m-d",strtotime('-8 days'));
        $days[] = date("Y-m-d",strtotime('-7 days'));
        $days[] = date("Y-m-d",strtotime('-6 days'));
        $days[] = date("Y-m-d",strtotime('-5 days'));
        $days[] = date("Y-m-d",strtotime('-4 days'));
        $days[] = date("Y-m-d",strtotime('-3 days'));
        $days[] = date("Y-m-d",strtotime('-2 days'));
        $days[] = date("Y-m-d",strtotime('-1 days'));
        $days[] = date("Y-m-d",strtotime('0 days'));

        return $days;
    }

    public function incomeExpenseChart() 
    {        
        $daysOfWeek = $this->getDatesOfWeek();
        $incomes = Order::whereBetween('created_at', [ $daysOfWeek[0].' 00:00:00', $daysOfWeek[6].' 23:59:59'])->get();
        $expenses = Expense::whereBetween('created_at', [ $daysOfWeek[0].' 00:00:00', $daysOfWeek[6].' 23:59:59'])->get();
        $chartArray = array();
        foreach ($daysOfWeek as $day) {
            $weeklyincome = "0";
            $weeklyexpense = "0";
              
            $enrolement = Enrolement::whereBetween('created_at', [ $day.' 00:00:00', $day.' 23:59:59'])->sum('payment');
            $order = Order::whereBetween('created_at', [ $day.' 00:00:00', $day.' 23:59:59'])->sum('payment');
            $personal_salary = Order::whereBetween('created_at', [ $day.' 00:00:00', $day.' 23:59:59'])->where('order_cat_id', 11)->sum('payment');
            $others = Order::whereBetween('created_at', [ $day.' 00:00:00', $day.' 23:59:59'])->Where("order_cat_id", 3)->sum('payment');
            $weeklyincome = $enrolement + $order - $others - $personal_salary; 
        
            $weeklyexpense = Expense::whereBetween('created_at', [ $day.' 00:00:00', $day.' 23:59:59'])->sum('payment');
           
            $chart = [
                'y' => $day,
                'a' => $weeklyexpense,
                'b'=>$weeklyincome,
            ];
            $chartArray[] =  $chart;
        }
       return $chartArray;   
    }

    public function pieChart()
    {
        $last_day = date("Y-m-d",strtotime('-29 days'));
        $current_day = date("Y-m-d");
        $enrolement = Enrolement::whereBetween('created_at', [ $last_day.' 00:00:00', $current_day.' 23:59:59'])->sum('payment');
        $order = Order::whereBetween('created_at', [ $last_day.' 00:00:00', $current_day.' 23:59:59'])->sum('payment');
        $others = Order::whereBetween('created_at', [ $last_day.' 00:00:00', $current_day.' 23:59:59'])->Where("order_cat_id", 3)->sum('payment');
        $personal_salary = Order::whereBetween('created_at', [ $last_day.' 00:00:00', $current_day.' 23:59:59'])->where('order_cat_id', 11)->sum('payment');
        $monthlyincome = $enrolement + $order - $others - $personal_salary;
        $monthlyexpense = Expense::whereBetween('created_at', [ $last_day.' 00:00:00', $current_day.' 23:59:59'])->sum('payment');
        $monthly =['income'=>$monthlyincome,'expense'=>$monthlyexpense];
        return $monthly;
        
    }

    public function roleUsers(){
        $users = User::all();
        return view('admin.userrole', compact('users'));
    }

    public function assignRoles(Request $request)
    {
        $user = User::where('email', $request['email'])->first();
        $user->roles()->detach();
        if($request['role_user']){
            $user->roles()->attach(Role::where('name', 'User')->first());
        }
        if($request['role_admin']){
            $user->roles()->attach(Role::where('name', 'Admin')->first());
        }
        if($request['role_superadmin']){
            $user->roles()->attach(Role::where('name', 'Superadmin')->first());
        }
        return redirect()->back();
    }
}
