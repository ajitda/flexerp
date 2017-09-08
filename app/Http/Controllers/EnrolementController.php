<?php

namespace App\Http\Controllers;

use App\Course;
use App\Enrolement;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
//use Illuminate\Auth\Access\Response;
//use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response;

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
        return view('enrolements.create', compact('students', 'courses'));
    }

    /*
     * get ajax request for geting automatic course fee
     */
    public function getCourseFee()
    {
        $course_id = Input::get('course_id');
        $course = Course::where('course_id', '=', $course_id)->get();
        return Response::json($course);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
