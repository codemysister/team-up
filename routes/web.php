<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthGoogleController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Team\CategoryController;
use App\Http\Controllers\Team\TeamController;
use App\Mail\TestMail;
use App\Models\Category;
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

Route::get('/login', function () {
    return view('user.auth.login');
})->middleware('guest');

Route::get('/register', function () {
    return view('user.auth.register');
});

Route::get('/verify', function () {
    return view('user.auth.verifikasi');
});

Route::get('/categories', [CategoryController::class, 'index']);

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/role', [RoleController::class, 'index'])->middleware('check');
    Route::post('/choose-role', [RoleController::class, 'chooseRole']);

    Route::group(['middleware' => ['hasrole']], function () {

        Route::get('/my-team', [TeamController::class, 'myTeam']);
        // Route::get('/myteam-detail/{team:slug}', [TeamController::class, 'myTeamDetail']);
        Route::get('/team-list', [TeamController::class, 'index']);
        Route::get('/team-detail/{team:slug}', [TeamController::class, 'myTeamDetail']);
        Route::post('/team-list', [TeamController::class, 'store']);


        Route::get('/profile', function () {
            return view('user.profile');
        });

        Route::get('/setting', function () {
            return view('user.setting');
        });
    });
});


Route::get('job-list', function () {
    return view('user.job-list');
});


Route::get('/roles', [RoleController::class, 'index']);

Route::get('/test-mail', function () {
    $users = User::all();
    foreach ($users as $user) {
        Mail::to($user)->send(new TestMail());
    }
});




// GOOGLE OAUTH
Route::get('/auth/redirect', [AuthGoogleController::class, 'redirectToProvider']);
Route::get('/auth/callback', [AuthGoogleController::class, 'handleProviderCallback']);





//  ADMIN
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin', 'auth']], function () {

    Route::get('/login', function () {
        return view('admin.login');
    });
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
