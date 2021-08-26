<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeaturesController;

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

Route::get('/', [HomeController::class, 'home']);

Route::get('/index.html', [HomeController::class, 'home']);

Route::get('/alerts.html', [FeaturesController::class, 'alrets']);
Route::get('/buttons.html', [FeaturesController::class, 'buttons']);
Route::get('/dropdowns.html', [FeaturesController::class, 'dropdowns']);
Route::get('/modals.html', [FeaturesController::class, 'modals']);
Route::get('/popovers.html', [FeaturesController::class, 'popovers']);
Route::get('/progress-bar.html', [FeaturesController::class, 'progresbars']);


Route::get('/404.html', function () {
    return view('404');
});
Route::get('/blank.html', function () {
    return view('blank');
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
Route::get('/form_advanceds.html', function () {
    return view('form_advanceds');
});
Route::get('/form_basics.html', function () {
    return view('form_basics');
});
Route::get('/login.html', function () {
    return view('login');
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
