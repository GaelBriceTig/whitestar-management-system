<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\Setup\PlayerTeamController;
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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::get('/registrations', function () {
    return view('auth.register');
});

Route::get('/admin/logout', [
    AdminController::class, 'logout'
    ])->name('admin.logout');


// User Management All routes

Route::prefix('users')->group(function () {

    Route::get('/view', [
        UserController::class, 'UserView'
        ])->name('user.view');

    Route::get('/add', [
        UserController::class, 'UserAdd'
        ])->name('users.add');

    Route::post('/store', [
        UserController::class, 'UserStore'
        ])->name('users.store');

    Route::get('/edit/{id}', [
        UserController::class, 'UserEdit'
        ])->name('users.edit');

    Route::post('/update/{id}', [
        UserController::class, 'UserUpdate'
        ])->name('users.update');

    Route::get('/delete/{id}', [
        UserController::class, 'UserDelete'
        ])->name('users.delete');

});




// User Profiles and password

Route::prefix('profiles')->group(function () {

    Route::get('/view', [
        ProfileController::class, 'ProfileView'
        ])->name('profile.view');

    Route::get('/edit', [
        ProfileController::class, 'ProfileEdit'
        ])->name('profile.edit');


    Route::post('/store', [
        ProfileController::class, 'ProfileStore'
        ])->name('profile.store');


    Route::get('/password/view', [
        ProfileController::class, 'PasswordView'
        ])->name('password.view');
    
    

});



// User Profiles and password

Route::prefix('setups')->group(function () {

    //Players Team Routes
    Route::get('player/team/view',
        [PlayerTeamController::class, 'ViewPlayer'])
        ->name('player.team.view');    
    
    Route::get('player/team/add',
        [PlayerTeamController::class, 'PlayerTeamAdd'])
        ->name('player.team.add');    
   
    Route::post('player/team/store',
        [PlayerTeamController::class, 'PlayerTeamStore'])
        ->name('store.player.team');    
   
    Route::get('player/team/edit/{id}',
        [PlayerTeamController::class, 'PlayerTeamEdit'])
        ->name('player.team.edit');    
    
    Route::post('player/team/update/{id}',
        [PlayerTeamController::class, 'PlayerTeamUpdate'])
        ->name('player.team.update');    
    
    Route::get('player/team/delete/{id}',
        [PlayerTeamController::class, 'PlayerTeamDelete'])
        ->name('player.team.delete');    


});


// Coach Access and priorities 








// Player access and priorities 
