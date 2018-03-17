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
use App\Events\MessagePosted;


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

//for testing
Route::get('/home/{lang?}', 'HomeController@index')->name('home');
//Route::get('/incomeexpense', 'HomeController@incomeExpenseChart')->name('home.incomeexpense');




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

Route::resource('/tasks', 'TaskController');
Route::get('/task/mytasks', 'TaskController@mytasks');
Route::get('/task/completedtasks', 'TaskController@completed');


Route::get('/getexpense', 'ExpenseController@getExpenseCategory');

Route::get('/enrolements/create/getcourse/{id}', 'EnrolementController@getCourseFee');

Route::get('sendmail', function(){
	Mail::to('ajitdas2900@gmail.com')->send(new SendEmail());
	return "Email is sent successfully";
});	

Route::get('/chat', function() {
    return view('chat');
})->middleware('auth');

Route::get('/messages', function(){
	return App\Message::with('user')->get();
})->middleware('auth');

Route::post('/messages', function(){
	//store the new messages
	$user = Auth::user();
	$message = $user->messages()->create([
		'message'=> request()->get('message')
	]);

	//announce that a new message has been posted
	broadcast(new MessagePosted($message, $user))->toOthers();
	return ['status'=> 'OK'];
	//return App\Message::with('user')->get();
})->middleware('auth');


