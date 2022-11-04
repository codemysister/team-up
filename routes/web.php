<?php

use App\Http\Controllers\Admin\UserController;
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
    return view('home');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/login', function () {
    return view('user.auth.login');
});

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin', 'auth']], function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    // User
    Route::get('/user/fetch', [UserController::class, 'fetchDataTable'])->name('user.fetch');
    Route::get('/user', [UserController::class, 'index']);
    Route::post('/user', [UserController::class, 'store']);
    Route::get('/user/{id}/edit', [UserController::class, 'edit']);
    Route::patch('/user/{id}/edit', [UserController::class, 'update']);
});
