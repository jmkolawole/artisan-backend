<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});


Route::prefix('v1')->middleware(['CORS'])->group(function () {
  //Login
  Route::prefix("auth")->group(function () {
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    
    //Register
    Route::post('/register', [RegisterController::class, 'register'])->name('register');

    //Google Login
    //Route::get('google/url', [GoogleController::class, 'loginUrl']);
    //Route::post('google/callback', [GoogleController::class, 'loginCallback']);

    //Recover Password
    //Route::post('recover-password', [ForgotPasswordController::class, 'recoverPassword']);
    //Route::post('reset-password', [ResetPasswordController::class, 'resetPassword']);

    //Verify token
    //Route::post('verify-token', [ResetPasswordController::class, 'verifyUserRequestToken']);
  });

  //Protected routes
  /* Route::middleware(['check.request.token'])->group(function () {

    
  

  }); */
  Route::get('/categories', [CategoryController::class, 'categories'])->name('categories');

  Route::get('/users', [UserController::class, 'users'])->name('users');

  //Upload items
  Route::post('/user/update/{id}', [UserController::class, 'update'])->name('update');
});
