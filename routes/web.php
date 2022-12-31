<?php

use Whoops\Run;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;
use App\Http\Controllers\LoginController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/login', [LoginController::class, 'index']);

Route::get('/dashboard', [DashController::class, 'index']);

Route::get('/booking', function(){
    return view('booking.index');
});

Route::get('/sparepart', function(){
    return view('sparepart.index');
});

Route::get('/customers', function(){
    return view('customers.index');
});

Route::get('/pembelian', function(){
    return view('pembelian.index');
});