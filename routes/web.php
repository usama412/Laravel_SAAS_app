<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController2;
use App\Http\Controllers\AuthController;
use Illuminate\Auth\Middleware\Authenticate;
// use Illuminate\Auth\Middleware\Guard;
use App\Http\Middleware\Guard;


Route::get('/', [PriceController::class, 'home']);
Route::post('/message', [PriceController::class, 'message_submit']);
Route::post('/ratting_save', [PriceController::class, 'ratting_submit']);
Route::get('/cache-clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    Artisan::call('view:clear');
    return 'Application cache cleared!';
});

// ############ Admin ###################
Route::get('/admin', [AdminController::class, 'show'])->middleware('CustomAuth');
Route::get('/adminuser', [PriceController::class, 'showuser'])->middleware('CustomAuth');
Route::get('/report/{id}', [AdminController::class, 'report2'])->middleware('CustomAuth');
Route::get('/userdetail/{id}', [AdminController::class, 'user2'])->middleware('CustomAuth');

Route::get('/adminplan', [PriceController::class, 'adminplan'])->middleware('CustomAuth');
Route::put('/editplan/{plan_id}', [PriceController::class, 'editplan'])->middleware('CustomAuth');
Route::get('/admincomment', [AdminController::class, 'show_comment'])->middleware('CustomAuth');
Route::get('/comment/{id}', [AdminController::class, 'comment2'])->middleware('CustomAuth');





Route::get('/service', function () {
    return view('service');
});

Route::get('/plancheckout/{plan_id}', [AuthController::class, 'plancheckout'])->middleware('CustomAuth');;
Route::get('/success',[AuthController::class,'successTransaction']);
Route::get('/cancel', [AuthController::class,'cancelTransaction']);
// ############# Login Page #################
Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/plan', [PriceController::class, 'index']);

// ############## New User Register ###################
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);
// Route::get('/register/{plan_id}/', [RegisterController::class, 'planname'])->middleware('CustomAuth');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('CustomAuth');


// ############# Other Pages #################
Route::get('/use', function () {
    return view('usecar');
});

Route::get('/t&c', function () {
    return view('t&c');
});



// ############# History Report Page #################
Route::post('/history', [HistoryController::class, 'history']);
Route::get('/history2',[HistoryController::class, 'history2']);
Route::post('/viewreport',[HistoryController::class, 'viewreport']);
Route::get('/viewreport2',[HistoryController::class, 'viewreport2']);
Route::post('/history3', [HistoryController2::class, 'history']);
// ############## Contact Us ##############


Route::get('/contact', [AuthController::class, 'contact_show']);
Route::post('/contact', [AuthController::class, 'contact_submit']);



// hamza work
Route::group(['middleware' => ['role:Super-Admin|User|admin|developer']], function () {
    
    Route::get('roles/{id}/give-permissions', [App\Http\Controllers\RoleController::class, 'addPermissionToRole']);
    Route::put('role/{id}/give-permissions', [App\Http\Controllers\RoleController::class, 'givePermissionToRole']);
    Route::resource('permission', App\Http\Controllers\PermissionContoller::class);
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('user', App\Http\Controllers\UserController::class)->middleware('permission:Delete');
    
    
});
    // ############# Dashboard (Protected Route) #################
    

// ############# Report #################
// Route::get('/report', [ReportController::class, 'index']);
Route::get('/report3', [HistoryController2::class, 'showReports'])->middleware('CustomAuth');
Route::get('/report', [HistoryController::class, 'showReports'])->middleware('CustomAuth');
// Route::get('/planPakge/{plan_id}', [HistoryController::class, 'planpakge']);

Route::get('/getreport/{userId}', [AdminController::class, 'report']);