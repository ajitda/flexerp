<?php

namespace App\Http\Controllers;

use App\Account;
use App\Course;
use App\Enrolement;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
//use Illuminate\Auth\Access\Response;
//use Illuminate\Http\Response;
//use Symfony\Component\HttpFoundation\Response;

class EnrolementController extends Controller
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
        $enrolements = Enrolement::all();

        return view("enrolements.enrolements", compact('enrolements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::pluck('name', 'id');
        $courses = Course::pluck('name', 'id', 'price');
        $types = Account::pluck('company','id');
        return view('enrolements.create', compact('students', 'courses', 'types'));
    }

    /*
     * get ajax request for geting automatic course fee
     */
    public function getCourse(Request $request)
    {
        $data = Course::select('fees', 'id')->where('id', $request->id)->take(100)->get();
        return response()->json($data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enrolement = new Enrolement();
        $qty= $enrolement->qty = $request->qty;
        $price= $enrolement->price = $request->price;
        $discount= $enrolement->discount = $request->discount;
        $total = $qty * $price - $discount;
        $enrolement->total = $total;
        $payment = $enrolement->payment = $request->payment;
        $dues = $total- $payment;
        $enrolement->dues = $dues;
        $enrolement->payment_type = $request->payment_type;
        $enrolement->comment = $request->comment;
        $enrolement->price = $request->price;
        $enrolement->course_id = $request->course_id;
        $enrolement->student_id = $request->student_id;
        $enrolement->save();
        return redirect('enrolements');

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
        $enrolement = Enrolement::findOrFail($id);
        $students = Student::pluck('name', 'id');
        $courses = Course::pluck('name', 'id');
        $types = Account::pluck('company','id');
        return view('enrolements.edit', compact('enrolement', 'students', 'courses','types'));
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
        $enrolement = Enrolement::findOrFail($id);
        $qty= $enrolement->qty = $request->qty;
        $price= $enrolement->price = $request->price;
        $discount= $enrolement->discount = $request->discount;
        $total = $qty * $price - $discount;
        $enrolement->total = $total;

        $payment = $enrolement->payment = $request->payment;
        $dues = $total- $payment;
        $enrolement->dues = $dues;
        $enrolement->payment_type = $request->payment_type;
        $enrolement->comment = $request->comment;
        $enrolement->price = $request->price;
        $enrolement->course_id = $request->course_id;
        $enrolement->student_id = $request->student_id;
        $enrolement->update();
        return redirect('enrolements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Enrolement::findOrFail($id)->delete();
        return redirect()->back();
    }
}
