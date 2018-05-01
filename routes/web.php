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
define('A_SEC', 6547891397);

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
Route::resource('/invoices', 'InvoiceController');
Route::get('/getcourse', 'EnrolementController@getCourse');

Route::post('/assignroles', [
    'uses'=>'HomeController@assignRoles',
    'as'=> 'role.assign',
    'middleware'=>'roles',
    'roles'=>['Superadmin']
]);
Route::get('/roleusers',[
   'uses' => 'HomeController@roleUsers',
   'as'=> 'role.users',
    'middleware'=>'roles',
    'roles'=>['Superadmin'],
]);


//Route::get()

Route::get('/error',function (){
   return view('error.error');
});

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
})->middleware('auth');
Route::resource('/transactions', 'TransactionController');
Route::prefix(A_SEC)->middleware('auth')->group(function () {

    Route::get('/accounts', [
        'uses'=>'AccountController@index',
        'as'=> 'accounts.index',
        'middleware'=>'roles',
        'roles'=>['SuperAdmin']
    ]);
    Route::get('/accounts/create', [
        'uses'=>'AccountController@create',
        'as'=> 'accounts.create',
        'middleware'=>'roles',
        'roles'=>['SuperAdmin']
    ]);
    Route::post('/accounts/store', [
        'uses'=>'AccountController@store',
        'as'=> 'accounts.store',
        'middleware'=>'roles',
        'roles'=>['SuperAdmin']
    ]);
    Route::get('/accounts/{account}', [
        'uses'=>'AccountController@show',
        'as'=> 'accounts.show',
        'middleware'=>'roles',
        'roles'=>['SuperAdmin']
    ]);
    Route::get('/accounts/{account}/edit', [
        'uses'=>'AccountController@edit',
        'as'=> 'accounts.edit',
        'middleware'=>'roles',
        'roles'=>['SuperAdmin']
    ]);
    Route::patch('/accounts/{account}/update', [
        'uses'=>'AccountController@update',
        'as'=> 'accounts.update',
        'middleware'=>'roles',
        'roles'=>['SuperAdmin']
    ]);
    Route::get('/accounts/{account}/destroy', [
        'uses'=>'AccountController@destroy',
        'as'=> 'accounts.destroy',
        'middleware'=>'roles',
        'roles'=>['SuperAdmin']
    ]);
});
