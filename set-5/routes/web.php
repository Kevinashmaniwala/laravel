<?php
use App\Http\Controllers;
use App\Http\Controllers\SoftwareProductController;
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

Route::get('/software', function () {
    return view('software.index');
});

Route::resource('software',SoftwareProductController::class);