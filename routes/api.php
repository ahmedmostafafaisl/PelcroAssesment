<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\api\CustomerController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::match(['get','post'],'login', [UserController::class,'login'])->name('login');
Route::post('register', [UserController::class,'register']);


Route::resource('customer', CustomerController::class);

Route::middleware('auth:api')->group(function () {
    Route::get('user', [UserController::class,'details']);
})->middleware('MyMiddleware', 'auth:api');
