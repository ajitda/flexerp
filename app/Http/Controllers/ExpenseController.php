<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Expense;
use App\ExpenseCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExpenseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = Expense::all();
        return view('expenses.expenses', compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::pluck('name', 'id');
        $expense_categories = ExpenseCategory::pluck('name', 'id');
        return view('expenses.create', compact('employees', 'expense_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Expense();
        $qty= $order->qty = $request->qty;
        $unit_price = $order->unit_price = $request->unit_price;
        $total = $qty * $unit_price;
        $order->total = $total;
        $payment= $order->payment = $request->payment;
        $dues = $total - $payment;
        $order->dues = $dues;
        $order->payment_type = $request->payment_type;
        $order->description = $request->description;
        $order->expense_category_id = $request->expense_category_id;
        $order->employee_id = $request->employee_id;
        $order->user_id = Auth::user()->id;
        $order->save();
        return redirect('expenses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expense = Expense::findOrFail($id);
        $employees = Employee::pluck('name', 'id');
        $expense_categories = ExpenseCategory::pluck('name', 'id');
        return view('expenses.edit', compact('employees', 'expense_categories', 'expense'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = Expense::findOrFail($id);
        $qty= $order->qty = $request->qty;
        $unit_price = $order->unit_price = $request->unit_price;
        $total = $qty * $unit_price;
        $order->total = $total;
        $payment= $order->payment = $request->payment;
        $dues = $total - $payment;
        $order->dues = $dues;
        $order->payment_type = $request->payment_type;
        $order->description = $request->description;
        $order->expense_category_id = $request->expense_category_id;
        $order->employee_id = $request->employee_id;
        $order->user_id = Auth::user()->id;
        $order->update();
        return redirect('expenses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Expense::findOrFail($id)->delete();
        return redirect()->back();
    }
}
