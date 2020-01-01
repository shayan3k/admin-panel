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
Auth::routes();

Route::get('/', function () {
    return view('admin.index');
});


Route::get('/index', function () {
    return view('admin.index');
});


Route::get('/modals', function () {
    return view('admin.modals');
});

Route::get('/data', function () {
    return view('admin.data');
});


Route::get('/bardasht', function () {
    return view('admin.bardasht');
});

Route::get('/charge-week', function () {
    return view('admin.charge-week');
});


Route::get('/charge-month', function () {
    return view('admin.charge-month');
});


Route::get('/charge', function () {
    return view('admin.charge');
});

Route::get('/eventmanager-imp', function () {
    return view('admin.eventmanager-imp');
});

Route::get('/eventmanager', function () {
    return view('admin.eventmanager');
});


Route::get('/if-all', function () {
    return view('admin.if-all');
});

Route::get('/if-loss', function () {
    return view('admin.if-loss');
});

Route::get('/if-win', function () {
    return view('admin.if-win');
});


Route::get('/listmanager', function () {
    return view('admin.listmanager');
});

Route::get('/pay-day', function () {
    return view('admin.pay-day');
});

Route::get('/pay-month', function () {
    return view('admin.pay-month');
});


Route::get('/pay-week', function () {
    return view('admin.pay-week');
});

Route::get('/register', function () {
    return view('admin.register');
});

Route::get('/userreview', function () {
    return view('admin.userreview');
});
