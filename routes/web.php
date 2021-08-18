<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/index.html', function () {
    return view('index');
});
Route::get('/404.html', function () {
    return view('404');
});
Route::get('/alerts.html', function () {
    return view('alerts');
});
Route::get('/blank.html', function () {
    return view('blank');
});
Route::get('/buttons.html', function () {
    return view('buttons');
});
Route::get('/charts.html', function () {
    return view('charts');
});
Route::get('/copycontent.html', function () {
    return view('copycontent');
});
Route::get('/datatables.html', function () {
    return view('datatables');
});
Route::get('/dropdowns.html', function () {
    return view('dropdowns');
});
Route::get('/form_advanceds.html', function () {
    return view('form_advanceds');
});
Route::get('/form_basics.html', function () {
    return view('form_basics');
});
Route::get('/login.html', function () {
    return view('login');
});
Route::get('/modals.html', function () {
    return view('modals');
});
Route::get('/popovers.html', function () {
    return view('popovers');
});
Route::get('/progress-bar.html', function () {
    return view('progress-bar');
});
Route::get('/register.html', function () {
    return view('register');
});
Route::get('/simple-tables.html', function () {
    return view('simple-tables');
});
Route::get('/ui-colors.html', function () {
    return view('ui-colors');
});
