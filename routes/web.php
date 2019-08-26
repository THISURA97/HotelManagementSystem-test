<?php

use App\Customer;
use Illuminate\Support\Facades\Input;


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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('Reservation', 'ReservationController');

Route::get('/service', 'ServiceController@index')->name('service');

Route::resource('Customer','CustomerController');


Route::get ( '/', function () {
    return view ( 'details' );
} );
Route::any ( '/search', function () {
    $q = Input::get ( 'q' );
    $user = Customer::where ( 'FirstName', 'LIKE', '%' . $q . '%' )->orWhere ( 'LastName', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'details' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'details' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::resource('Room','RoomController');


Route::get('/finance_main','financeController@index');

Route::get('/getExpence','financeController@getExpenceView');
Route::post('/add-expence','financeController@addExpence');
Route::get('/expense-cat','financeController@catExpenceSearch');
Route::get('/expense-date','financeController@dateExpenseSearch');
Route::post('/update-expence','financeController@updateExpence');
Route::post('/delete-expence','financeController@deleteExpence');
Route::get('/done-updateExpence','financeController@doUpdateExpence');

Route::get('/getIncome','financeController@getIncomeView');
Route::get('/income-date','financeController@dateIncomeSearch');
Route::get('/income-cat','financeController@catIncomeSearch');
Route::get('//getFinanceReq','financeController@getRequestView');
Route::get('/reports','financeController@getReports');

Route::get('/', function () {
    return view('layouts.layout');
});
Route::get('/shop.package', function () {
    return view('shop.package');
});


Route::get('/AddSupplier', [
    'uses' => 'supplierController@AddSupply',
    'as' => 'AddSupplier'
]);

Route::get('/addFruits', [
    'uses' => 'supplierController@AddFruits',
    'as' => 'addFruits'
]);



Route::get('/signup', function () {
    return view('user.signup');
})->middleware('guest');

Route::get('/signin', function () {
    return view('user.signin');
})->middleware('guest');


Route::get('/Suppliersignin', function () {
    return view('user.supplier_signin');
})->middleware('guest');

Route::post('/signup',[

    'uses' => 'UserController@postSignup',
    'as' => 'user.signup'
])->middleware('guest');

Route::post('/signin',[

    'uses' => 'UserController@postSignin',
    'as' => 'user.signin'
])->middleware('guest');

Route::post('/supplierLog',[

    'uses' => 'UserController@postSigninSupplier',
    'as' => 'supplier.signin'
])->middleware('guest');

Route::get('/profile',[

    'uses' => 'UserController@getUser',
    'as' => 'profile'
])->middleware('auth');

Route::get('/SupplierBackend',[

    'uses' => 'UserController@getSupplier',
    'as' => 'SupplierBackend'
])->middleware('auth');

Route::get('/logout',[

    'uses' => 'UserController@Logout',
    'as' => 'logout'
])->middleware('auth');

Route::post('/cart',[

    'uses' => 'CartController@postCart',
    'as' => 'user.cart'
]);

Route::post('/insertSupplier',[

    'uses' => 'fruitController@insertSuppliers',
    'as' => 'insertSupplier'
]);

Route::post('/finance.request',[

    'uses' => 'FinanceRequest@insertRequest',
    'as' => 'finance.request'
]);


Route::get('/supplierDashBoard','supplierController@supplierDash');;


Route::get('/list',[

    'uses' => 'supplierController@supplierList',
    'as' => 'list'
]);


Route::get('/',[

    'uses' => 'FinanceRequest@getRequest',
    'as' => 'financeRequest'
]);

Route::get('/financeRequest',[

    'uses' => 'FinanceRequest@listRequests',
    'as' => 'financeRequest'
]);

Route::get('/inventoryRequest',[

    'uses' => 'InventoryRequest@listRequests',
    'as' => 'inventoryRequest'
]);
Route::get('/fruit',[

    'uses' => 'supplierController@index',
    'as' => 'supplier.fruit'
]);

Route::post('/addFruits',[

    'uses' => 'fruitController@insertfruit',
    'as' => 'addFruits'
]);
Route::get('/fruit/edit/{id}', 'supplierController@edit');
Route::patch('/fruit/update/{id}', 'supplierController@update');
Route::delete('/fruit/delete/{id}', 'supplierController@destroy');
Route::delete('/supplier/delete/{id}', 'supplierController@delete');
Route::get('/search','supplierController@search');

Route::get('/inventory/edit/{id}', 'InventoryRequest@edit');
Route::patch('/inventory/update/{id}', 'InventoryRequest@update');




Route::get('/booking','customer2Controller@index') ->name('booking');

Route::get('/dashboard' ,function(){
    return view('dashboard');
});

Route::post('/booking','customer2Controller@store');

Route::get('/bookingRes',function(){

    return view('bookingRes');

});




Route::get('/rooms' ,function(){


    return view('rooms');

});


Route::get ('/session', 'customer2Controller@showsession');


Route::get('/mybookings','customer2Controller@retriveData');













Route::get('/calccost','customer2Controller@roomcalc');



Route::get('/bookingDis/{id}','customer2Controller@deleteData');









Route::get('/editBooking','customer2Controller@editBookingView');


Route::patch('/update/editbooking/{id}', 'customer2Controller@editData');

Route::get('/update/mybookings/{id}', 'customer2Controller@updateData');







Route::get('task','TaskController@index')->name('task');
Route::get('task/getdata','TaskController@getdata')->name('task.getdata');
Route::post('task/postdata', 'TaskController@postdata')->name('task.postdata');
Route::get('task/fetchdata', 'TaskController@fetchdata')->name('task.fetchdata');
Route::get('task/removedata', 'TaskController@removedata')->name('task.removedata');
Route::get('task/complete', 'TaskController@complete')->name('task.complete');

Route::get('session','SessionController@index')->name('session');
Route::get('session/getdata','SessionController@getdata')->name('session.getdata');
Route::post('session/postdata', 'SessionController@postdata')->name('session.postdata');
Route::get('session/fetchdata', 'SessionController@fetchdata')->name('session.fetchdata');
Route::get('session/removedata', 'SessionController@removedata')->name('session.removedata');
Route::get('session/complete', 'SessionController@complete')->name('session.complete');

Route::get('room', function() {
    return view('room');
});

Route::get('report', function() {
    return view('report');
});

Route::get('Hdashboard', function() {
    return view('Hdashboard');
});


Route::get('/addevents', function () {
    return view('addevents');
});

Route::post('/submitEvent', 'EventController@save');

Route::get('/Events', 'EventController@view');

Route::get('/update/{id}', 'EventController@update');

Route::post('/edit/{id}', 'EventController@edit');

Route::get('/read/{id}', 'EventController@read');

Route::get('/deleteevent/{id}', 'EventController@delete');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dash', function () {
    return view('dashboard.dashboard');
});

Route::get('/pagination', 'PaginationController@index');

Route::resource('categories', 'CategoryController'); //folder name and the controller

Route::resource('customsearch', 'CustomSearchController');

Route::get('/pdf', 'PdfController@index');

Route::get('/dynamic_pdf/pdf', 'PdfController@pdf');

Route::resource('requestimtems', 'RequestController');


Route::get('EProfile', function () {
    return view('EProfile');
});

Route::get('Attendance', function () {
    return view('Attendance');
});

Route::get('EDashboard', function () {
    return view('EDashboard');
});
Route::get('EmpViewPro', function () {
    return view('EmpViewPro');
});

Route::get('CreateAcc', function () {
    return view('CreateAcc');
});

Route::get('EmpDetails', function () {
    return view('EmpDetails');
});

Route::get('UpdateEmpDetails', function () {
    return view('UpdateEmpDetails');
});

//dashboard buttons
Route::get('/addEmp','EmployeeController@createacc') -> name('addEmp');
Route::get('/addEmp','EmployeeController@empview') -> name('addEmp');
Route::get('/attenEmp','EmployeeController@attenEmp') -> name('attenEmp');



//controller
Route::get('/emoloyee','EmployeeController@index');

Route::post('/employee','EmployeeController@store')->name('addimage');

//emplist
Route::get('/accView','EmployeeController@createAccViewEmp');

//Attendance
Route::get('/attenEmpView','EmployeeController@attenEmpView');

Route::post('/delete-emp','EmployeeController@deleteEmp');


