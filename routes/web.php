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
    return view('index');
});
Route::get('/income-tax', function () {
    return view('incometax');
});
Route::get('/gst', function () {
    return view('gst');
});
Route::get('/tds', function () {
    return view('tds');
});
Route::get('/company', function () {
    return view('company');
});
Route::get('/accounting', function () {
    return view('accounting');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/import-export', function () {
    return view('import_export');
});
Route::get('/property-single', function () {
    return view('property-single');
});
