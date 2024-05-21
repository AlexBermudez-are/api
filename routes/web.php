<?php

use App\Http\Controllers\CuponsController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/csrf-token', function () {
    return response()->json(['token' => csrf_token()]);
});

Route::get('/user/cupons', [CuponsController::class, 'getCupons']);
Route::post('/user/cupon/create', [CuponsController::class, 'createCupon']);
Route::put('/user/cupon/{id}', [CuponsController::class, 'redeemCoupon']); 

Route::get('/user/{id}', [UserController::class, 'getUserUnique']); //
Route::post('/user/register', [UserController::class, 'register']); //
Route::post('/user/login', [UserController::class, 'login']);//

Route::get('/offers', OfferController::class);//