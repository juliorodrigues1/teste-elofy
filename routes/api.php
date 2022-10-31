<?php

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
Route::post('logout', function (){
    auth()->user()->tokens()->delete();
    return response()->json(['message' => 'Logout realizado com sucesso'], 200);
});
Route::post('/login', [\App\Http\Controllers\UsuarioController::class, 'login']);
