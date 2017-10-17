<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Mail\SendEmail;
use App\Events\Event;
use Illuminate\Support\Facades\Mail;


Route::get('/', function () {
    return view('welcome');
});

Route::get('event', function(){
	event(new Event('Hey How are you'));
});

Route::get('listen', function(){
	return view('listenBroadcast');
});

Auth::routes();

Route::get('/search/{searchkey}', 'HomeController@search');

Route::get('/home/{lang?}', 'HomeController@index')->name('home');
Route::resource('/students', 'StudentController');
Route::resource('/courses', 'CourseController');
Route::resource('/enrolements', 'EnrolementController');
Route::get('/getcourse', 'EnrolementController@getCourse');



Route::resource('/employees', 'EmployeeController');
Route::resource('/references', 'ReferenceController');
Route::resource('/customers', 'CustomerController');
Route::resource('/ordercat', 'OrderCatController');
Route::resource('/orders', 'OrderController');
Route::get('/getorderlist', 'OrderController@getOrderList');

Route::resource('/expensecategories', 'ExpenseCategoryController');
Route::resource('/expenses', 'ExpenseController');
Route::get('/getexpenselist', 'ExpenseController@getExpenseList');
Route::resource('/loans', 'LoanController');
Route::get('/getexpense', 'ExpenseController@getExpenseCategory');

Route::get('/enrolements/create/getcourse/{id}', 'EnrolementController@getCourseFee');

Route::get('sendmail', function(){
	Mail::to('ajitdas2900@gmail.com')->send(new SendEmail());
	return "Email is sent successfully";
});	

Route::get('chat', function() {
    return view('chat');
});