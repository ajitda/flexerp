<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Employee;
use App\Order;
use App\OrderCat;
use App\Reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('id', 'desc')->paginate(10);;
        return view('orders.orders', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order_cats = OrderCat::pluck('name', 'id');
        $employees = Employee::pluck('name', 'id');
        $references = Reference::pluck('name', 'id');
        $customers = Customer::pluck('name', 'id');
        return view('orders.create', compact('order_cats', 'employees', 'references', 'customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order();
        $qty= $order->qty = $request->qty;
        $unit_price = $order->unit_price = $request->unit_price;
        $discount = $order->discount = $request->discount;
        $total = $qty * $unit_price -$discount;
        $order->total = $total;
        $payment= $order->payment = $request->payment;
        $dues = $total - $payment;
        $order->dues = $dues;
        $order->type = $request->type;
        $order->description = $request->description;
        $order->order_cat_id = $request->order_cat_id;
        $order->customer_id = $request->customer_id;
        $order->employee_id = $request->employee_id;
        $order->reference_id = $request->reference_id;
        $order->user_id = Auth::user()->id;
        $order->save();
        return redirect('orders');

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

    public function getOrderList(Request $request)
    {
        if($request->ajax()) {
            $orders = Order::whereBetween('created_at', [ $request->DateCreated.' 00:00:00', $request->EndDate.' 23:59:59'])->get();
            //  $user = Auth::user()->role;
            return view('orders.orderlist')->with('orders', $orders);
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
        $order = Order::findOrFail($id);
        $order_cats = OrderCat::pluck('name', 'id');
        $employees = Employee::pluck('name', 'id');
        $references = Reference::pluck('name', 'id');
        $customers = Customer::pluck('name', 'id');
        return view('orders.edit', compact('order_cats', 'employees', 'references', 'customers', 'order'));
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
        $order = Order::findOrFail($id);
        $qty = $order->qty = $request->qty;
        $unit_price = $order->unit_price = $request->unit_price;
        $discount = $order->discount = $request->discount;
        $total = $qty * $unit_price - $discount;
        $order->total = $total;
        $payment = $order->payment = $request->payment;
        $dues = $total - $payment;
        $order->dues = $dues;
        $order->type = $request->type;
        $order->description = $request->description;
        $order->order_cat_id = $request->order_cat_id;
        $order->customer_id = $request->customer_id;
        $order->employee_id = $request->employee_id;
        $order->reference_id = $request->reference_id;
        $order->user_id = Auth::user()->id;
        $order->update();
        return redirect('orders');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::findOrFail($id)->delete();
        return redirect()->back();
    }
}
