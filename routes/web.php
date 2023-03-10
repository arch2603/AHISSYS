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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::middleware('auth')->group( function(){


    //Route::get('/', 'ContentsController@home')->name('home');

    //Home Directory
    Route::get('/', 'HomeController@index')->name('home');
//    Route::get('/dashboard/home', 'DashboardController@home')->name('dashboard');


    Route::post('users-mgmnt/search', 'UsersController@search')->name('users-mgmnt.search');
    Route::get('/users-mgmnt/{user_id}', 'UsersController@show')->name('show_user');
    Route::post('/users-mgmnt/{user_id}','UsersController@modify')->name('users-mgmnt.update_user');
    Route::get('/users/new', 'UsersController@newUser')->name('new_user');
    Route::post('/users/new', 'UsersController@newUser')->name('create_user');

    Route::resource('users-mgmnt', 'UsersController');//users-mgmnt protected variable in user controller
    //Route::resource('user', 'UserManagementController');


    //Employee Route
    Route::get('/employees', 'EmployeesController@index')->name('employees');//emloyee is just an arbitrary name
    Route::get('/employees/new', 'EmployeesController@newEmployee')->name('new_employee');
    Route::post('/employees/new', 'EmployeesController@newEmployee')->name('create_employee');
    Route::get('/emps-mgmnt/{employee_id}', 'EmployeesController@show')->name('show_employee');
    Route::get('/employeeimage/{filename}', [
        'uses' => 'EmployeesController@getEmployeeImage',
        'as' => 'employee.image'
    ]);
    Route::get('/employeestst', [
        'uses' => 'EmployeesController@employeeTest',
        'as' => 'emp-test'
    ]);

    Route::post('/employees/{employee_id}', 'EmployeesController@modify')->name('update_employee');
    Route::post('emps-mgmnt/search', 'EmployeesController@search')->name('emps-mgmnt.search');
    Route::resource('emps-mgmnt', 'EmployeesController');

    //Dashboard Route
    Route::get('/dashboard', 'DashBoardController@index')->name('home');


    //Route::get('/home', 'HomeController@index')->name('home');
} );

Auth::routes();//must have otherwise it thrown login route exception error


//

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/di', 'EmployeesController@di')->name('home');
