<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeAuthController;
use App\Http\Controllers\TttController;
use App\Http\Controllers\UserAuthController;



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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::group([
  'middleware' => 'api',
  'prefix' => 'employee'
], function ($router) {
  Route::post('login', [EmployeeAuthController::class, 'login']);
  Route::post('logout', [EmployeeAuthController::class, 'logout']);
  Route::post('refresh', [EmployeeAuthController::class, 'refresh']);
  Route::post('me', [EmployeeAuthController::class, 'me']);
});

// ------------------
Route::group([
  // 'middleware' => 'api',
  'prefix' => 'user'
], 
function ($router) {
  Route::post('login', [UserAuthController::class, 'login']);
  Route::post('logout', [UserAuthController::class, 'logout']);
  Route::post('refresh', [UserAuthController::class, 'refresh']);
  Route::post('me', [UserAuthController::class, 'me']);
});
Route::group([
  'middleware' => 'api',
  // 'prefix' => 'test'
], function ($router) {
  Route::get('ttt', [TttController::class, 'ttt']);
});

