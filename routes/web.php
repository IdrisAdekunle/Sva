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
    return view('auth.login');
});

Auth::routes();

Route::get('/markAsRead', function() {
    auth()->user()->unreadNotifications->markAsRead();
    return back();
})->name('Read');
Route::get('/dashboard', 'DashboardController@index');
Route::resource('staff','StaffController');
Route::get('/view', 'ViewController@index');
Route::get('/users/reset', 'UserController@ResetPasswordIndex')->name('reset')->middleware('isReset');
Route::POST('/users/reset', 'UserController@ResetPassword')->name('password');
Route::POST('/view/view', 'ViewController@view')->name('show');
Route::resource('shift', 'ShiftController');
Route::resource('departments', 'DepartmentController');
Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('permission', 'PermissionController');
Route::resource('logs', 'LogController')->middleware('isLog');
Route::get('/date','DateController@CreateNewMonthDatesIndex');
Route::post('/date/new','DateController@CreateNewMonthDates')->name('Date');
Route::get('/ShiftSchedule','ShiftScheduleController@index');
Route::post('/ShiftSchedule/upload','ShiftScheduleController@ShowUploadView')->name('ShowUpload');
Route::post('/ShiftSchedule/store','ShiftScheduleController@store')->name('Store');
Route::get('/ShiftSchedule/ChangeStaffSchedule','ShiftScheduleController@ChangeStaffSchedule');
Route::get('/ShiftSchedule/{id}/edit','ShiftScheduleController@Edit')->name('edit');
Route::Put('/ShiftSchedule/{id}','ShiftScheduleController@Update')->name('update');
