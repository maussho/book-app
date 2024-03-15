<?php

use App\Http\Controllers\API\ApiAuthorController;
use App\Http\Controllers\API\ApiBookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//hacemos referencia al controllador api
use App\Http\Controllers\API\ApiEditorialController;
use App\Http\Controllers\API\ApiGenderController;
use App\Http\Controllers\API\ApiProfileController;
use App\Http\Controllers\API\ApiUserController;
use Doctrine\DBAL\Schema\Index;

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
// creamos la ruta para la api
Route::get('/editorials', [ApiEditorialController::class, 'index']);

Route::get('/books', [ApiBookController::class, 'index']);

Route::get('/genders', [ApiGenderController::class, 'index']);

Route::get('/profiles', [ApiProfileController::class, 'index']);

Route::get('/authors', [ApiAuthorController::class, 'index']);

Route::get('/users',[ApiUserController::class, 'index']);