<?php

namespace App\Http\Controllers;

use App\Account;
use App\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loans = Loan::all();
        return view('loans.loans', compact('loans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $accounts = Account::pluck('company', 'id');
        return view('loans.create', compact('accounts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loan = new Loan();
        $loan->name = $request->name;
        $amount = $loan->amount = $request->amount;
        $interest = $loan->interest = $request->interest;
        $installment_qty = $loan->installment_qty = $request->installment_qty;
        $installment = ($amount + ($amount * $interest)/100) / $installment_qty;
        $loan->installment = $installment;
        $loan->payment_date = $request->payment_date;
        $loan->payment = $request->payment;
        $loan->loan_type = $request->loan_type;
        $loan->payment_type = $request->payment_type;
        $loan->total_amount = $installment * $installment_qty;
        $loan->expense_category_id = 6;
        $loan->user_id = Auth::user()->id;
        $loan->save();

        if($loan->loan_type == 0){
            Account::updateAccount($loan->payment_type,null, $loan->payment);
        }else{
            Account::updateAccount($loan->payment_type, $loan->payment, null);
        }
        return redirect('loans');
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
        $loan = Loan::findOrFail($id);
        return view('loans.edit', compact('loan'));
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
        $loan = Loan::findOrFail($id);
        $loan->name = $request->name;
        $amount = $loan->amount = $request->amount;
        $interest = $loan->interest = $request->interest;
        $installment_qty = $loan->installment_qty = $request->installment_qty;
        $installment = ($amount + ($amount * $interest)/100) / $installment_qty;
        $loan->installment = $installment;
        $loan->payment_date = $request->payment_date;
        $loan->total_amount = $installment * $installment_qty;
        $loan->payment = $request->payment;
        $loan->user_id = Auth::user()->id;
        $loan->expense_category_id = 6;
        $loan->update();
        return redirect('loans');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Loan::findOrFail($id)->delete();
        return redirect()->back();
    }
}
