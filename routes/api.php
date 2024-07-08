<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

//Register
Route::post("register", [ApiController::class, "register"]);

//Login
Route::post("login", [ApiController::class, "login"]);

//Login
Route::get("categories", [ApiController::class, "categories"]);
Route::get("produits", [ApiController::class, "produits"]);
Route::post("enregistreProduit", [ApiController::class, "enregistreProduit"]);
