<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\RoleController;
use App\Mail\TestMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
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

Route::get('/register', function () {
    return view('user.auth.register');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/role', [RoleController::class, 'index']);
    Route::post('/choose-role', [RoleController::class, 'chooseRole']);
});

Route::get('/my-team', function () {
    return view('user.my-team');
});

Route::get('/team-list', function () {
    return view('user.team-list');
});


Route::get('/myteam-detail', function () {
    return view('user.myteam-detail');
});

Route::get('/verify', function () {
    return view('user.auth.verifikasi');
});
Route::get('/roles', [RoleController::class, 'index']);

Route::get('/test-mail', function () {
    $users = User::all();
    foreach ($users as $user) {
        Mail::to($user)->send(new TestMail());
    }
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
    Route::delete('/user/{id}/delete', [UserController::class, 'destroy']);
});
