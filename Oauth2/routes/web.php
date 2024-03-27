<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/table', function () {
    return view('admin.tables');
});

Route::get('/profile', function () {
    return view('admin.user');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/table', [UserController::class, 'index'])->name('users.index');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');


Route::middleware('auth:api')->get('/home', function (Request $request) {
    return $request->user();
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('register');
});