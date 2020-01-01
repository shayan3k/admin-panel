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

Route::get('/charge-amount', function () {
    return view('admin.charge-amount');
});

Route::get('/charge-week', function () {
    return view('admin.charge-week');
});


Route::get('/charge', function () {
    return view('admin.charge');
});

Route::get('/eventmaneger-imp', function () {
    return view('admin.eventmaneger-imp');
});

Route::get('/eventmaneger', function () {
    return view('admin.eventmaneger');
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


Route::get('/ListManager', function () {
    return view('admin.ListManager');
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

Route::get('/UserReview', function () {
    return view('admin.UserReview');
});
