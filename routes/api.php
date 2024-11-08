<?php

use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\InvoicesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'v1', 'namespace' => 'App\Http\Controllers\Api'], function() {
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('invoices', InvoicesController::class);
});
