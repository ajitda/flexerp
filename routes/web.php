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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/search/{searchkey}', 'HomeController@search');

Route::get('/home/locale/{lang?}', 'HomeController@index')->name('home');
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

