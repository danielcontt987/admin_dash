<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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
    return view('auth.login');
});


//Route::get('/dash/users',[ App\Http\Controllers\UserController::class, 'list'])->name('users');

//Main panel
Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash');


Route::group(['middleware' => ['auth']], function(){
  Route::resource('roles', RoleController::class);
  Route::resource('users', UserController::class);
  Route::resource('blogs', BlogController::class);
});
