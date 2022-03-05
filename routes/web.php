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

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Controllers\RolController;
use Modules\Admin\Http\Controllers\UserController;
use Modules\Blog\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('auth.login');
});


//Route::get('/dash/users',[ App\Http\Controllers\UserController::class, 'list'])->name('users');

//Main panel
Route::middleware(['auth:sanctum', 'verified'])->get('/principal', function () {
    return view('principal.dash');
})->name('principal');



  Route::prefix('/admin')->group(function () {
    Route::resource('/usuarios', UserController::class);
    Route::resource('/roles', RolController::class);

});

Route::resource('/blogs', BlogController::class);


