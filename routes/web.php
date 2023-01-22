<?php

use App\Events\MessageSent;
use App\Events\NotificationSend;
use App\Events\SendMessage;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthGoogleController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MyTeam\RequirementController;
use App\Http\Controllers\Notification;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Team\CategoryController;
use App\Http\Controllers\Team\ChatController;
use App\Http\Controllers\Team\MyTeamController;
use App\Http\Controllers\Team\TaskController;
use App\Http\Controllers\Team\TeamController;
use App\Mail\TestMail;
use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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


Route::put('/notification', [NotificationController::class, 'update']);

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

    // Role
    Route::get('/role', [RoleController::class, 'index'])->middleware('check');
    Route::post('/choose-role', [RoleController::class, 'chooseRole']);


    Route::group(['middleware' => ['verified', 'hasrole']], function () {
        Route::get('/my-team', [TeamController::class, 'myTeam']);
        // Route::get('/myteam-detail/{team:slug}', [TeamController::class, 'myTeamDetail']);
        Route::get('/team-list', [TeamController::class, 'index']);
        Route::get('/team-detail/{team:slug}', [TeamController::class, 'myTeamDetail']);
        Route::get('/team-detail/{team:slug}/fetch', [TeamController::class, 'fetchTeamDetail']);
        Route::post('/team-detail/{team:slug}/apply', [TeamController::class, 'myTeamApply']);
        Route::post('/team-detail/acc', [TeamController::class, 'myTeamAcc']);
        Route::post('/team-detail/reject', [TeamController::class, 'myTeamReject']);
        Route::post('/team-list', [TeamController::class, 'store']);



        // My Team Manage

        // profile tim
        Route::put('/team-detail/{team:slug}/profile/change-name', [MyTeamController::class, 'changeTeamName'])->name('change.name');
        Route::put('/team-detail/{team:slug}/profile/change-description', [MyTeamController::class, 'changeDescName'])->name('change.description');

        // requirement tim
        Route::post('/team-detail/{team:slug}/requirement', [RequirementController::class, 'store'])->name('add.requirement');
        Route::get('/team-detail/{team:slug}/requirement/fetch', [RequirementController::class, 'fetch'])->name('fetch.requirement');
        Route::put('/team-detail/{team:slug}/requirement/fetch', [RequirementController::class, 'update'])->name('update.requirement');
        Route::delete('/team-detail/{team:slug}/requirement', [RequirementController::class, 'destroy']);
        Route::delete('/team-detail/{team:slug}/qualification', [RequirementController::class, 'destroyQualification'])->name('destroy.qualification');

        // member tim
        Route::delete('/team-detail/{team:slug}/member', [MemberController::class, 'kick']);

        // task tim
        Route::get('/team-detail/{team:slug}/task/fetch', [TaskController::class, 'show']);
        Route::get('/team-detail/{team:slug}/members/fetch', [TaskController::class, 'fetchMembers']);
        Route::delete('/team-detail/{team:slug}/task', [TaskController::class, 'destroy']);
        Route::put('/team-detail/{team:slug}/task', [TaskController::class, 'update']);
        Route::post('/team-detail/{team:slug}/task/store', [TaskController::class, 'store']);
        Route::post('/team-detail/{team:slug}/task/file', [TaskController::class, 'fileStore']);
        Route::delete('/team-detail/{team:slug}/task/file', [TaskController::class, 'fileDelete']);
        Route::post('/team-detail/{team:slug}/task/member', [TaskController::class, 'memberStore']);
        Route::delete('/team-detail/{team:slug}/task/member', [TaskController::class, 'memberDelete']);
        // status tim
        Route::post('/team-detail/{team:slug}/status/', [MyTeamController::class, 'updateStatusTeam'])->name('update.status');

        Route::get('/profile', [ProfileController::class, 'index']);
        Route::put('/profile', [ProfileController::class, 'update']);
        Route::post('/profile/avatar', [ProfileController::class, 'upload']);
        Route::delete('/profile/avatar', [ProfileController::class, 'remove']);


        // Route::get('/setting', function (Request $request) {
        //     $notifications = DB::table('notifications')
        //         ->where('id', '=', $request->user()->id)
        //         ->get();
        //     $notificationStatus = count(DB::table('notifications')
        //         ->where('user_id', '=', $request->user()->id)
        //         ->where('is_read', '=', false)
        //         ->get());

        //     return view('user.setting', compact('notifications', 'notificationStatus'));
        // });
    });

    // Chat
    Route::post('/message', [ChatController::class, 'store']);
});


Route::get('/tes', function () {
    broadcast(new \App\Events\sendMessage(['user' => 'deva', 'team_id' => 3]));
});

Route::get('job-list', [JobController::class, 'index']);



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
Route::group(['prefix' => 'admin'], function () {

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
