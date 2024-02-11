<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Auth::routes();
Route::get('/',function(){
    return redirect('/login');
});
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/loginkan',[LoginController::class,'login'])->name('log-in');

Route::middleware(['auth'])->group(function () {
   Route::get('/home',[HomeController::class,'index'])->name('home');
});