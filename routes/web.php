<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!

Route::get('/home', function () {
    return view('home');
});
|
*/

Route::get('/home', [App\Http\Controllers\StudenController::class, 'index']);
Route::get('{id}', [App\Http\Controllers\StudenController::class, 'show']);


Route::get('/', function () {
    return view('index');
});


Route::get('layouts.modals', function () {
    return view('layouts.modals');
});
Route::get('layouts.buttons', function () {
    return view('layouts.buttons');
});
Route::get('layouts.dropdowns', function () {
    return view('layouts.dropdowns');
});
Route::get('layouts.alerts', function () {
    return view('layouts.alerts');
});
Route::get('layouts.popovers', function () {
    return view('layouts.popovers');
});
Route::get('layouts.progress-bar', function () {
    return view('layouts.progress-bar');
});
Route::get('form_basics', function () {
    return view('form_basics');
});

Route::get('ui-colors', function () {
    return view('ui-colors');
});
Route::get('simple-tables', function () {
    return view('simple-tables');
});
Route::get('datatables', function () {

   Route::get('datatables', function () {
    return view('datatables');
}); return view('datatables');
});
Route::get('login', function () {
    return view('login');
});
Route::get('register', function () {
    return view('register');
});
Route::get('404', function () {
    return view('404');
});
Route::get('blank', function () {
    return view('blank');
});
Route::get('charts', function () {
    return view('charts');
});
