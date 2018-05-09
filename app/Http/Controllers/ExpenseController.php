<?php

namespace App\Http\Controllers;

use App\Account;
use App\Employee;
use App\Expense;
use App\ExpenseCategory;
use App\Loan;
use App\Transaction;
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
    public function index(Request $request)
    {
        $s = $request->input('s');
        $expenses = Expense::orderBy('id', 'desc')
        ->search($s)
        ->paginate(10);
        return view('expenses.expenses', compact('expenses', 's'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $employees = Employee::pluck('name', 'id');
        $expense_categories = ExpenseCategory::pluck('name', 'id');
        $loans = Loan::pluck('name', 'id');
        $types = Account::pluck('company','id');
        return view('expenses.create', compact('employees', 'expense_categories', 'loans', 'request', 'types'));
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

        //update account
        $account = Account::findOrFail($request->payment_type);
        $account->balance = $account->balance - $payment;
        $account->update();

        // make a transaction
        $transaction = new Transaction();
        $transaction->transaction_type = 1;
        $transaction->user_id = Auth::user()->id;
        $transaction->amount = $payment;
        $transaction->description = $request->description;
        $transaction->account_id = $request->payment_type;
        $transaction->save();


        $order->description = $request->description;
        
        if(!empty($request->loan_id)){
            $loan_id = $order->loan_id = $request->loan_id;

            //processing loan
            $loan = Loan::findOrFail($loan_id);
            $loan->installment_qty = $loan->installment_qty - $qty;
            $loan->total_amount = $loan->total_amount - $payment;
            $loan->payment = $loan->payment + $payment;
            $loan->update();
        }


        $order->expense_category_id = $request->expense_category_id;
        $order->employee_id = $request->employee_id;
        $order->user_id = Auth::user()->id;
        $order->save();
        return redirect('expenses');
    }

    /*
     * For getting automatic lender name while selecting expense_category loan
     */
    public function getExpenseCategory(Request $request)
    {
        $data = Loan::select('name', 'id')->where('expense_category_id', $request->id)->where('total_amount', '!=', 0)->take(100)->get();
        return response()->json($data);
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

    public function getExpenseList(Request $request)
    {
        if($request->ajax()) {
            $expenses = Expense::whereBetween('created_at', [ $request->DateCreated.' 00:00:00', $request->EndDate.' 23:59:59'])->get();
          //  $user = Auth::user()->role;
            return view('expenses.expenselist')->with('expenses', $expenses);
        }
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
        $loans = Loan::pluck('name', 'id');
        $expense_categories = ExpenseCategory::pluck('name', 'id');
        return view('expenses.edit', compact('employees', 'expense_categories', 'expense', 'loans'));
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
        $order->loan_id     = $request->loan_id;

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

    /**
    *for search
    *
    *
    */

}
