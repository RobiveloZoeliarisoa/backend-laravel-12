<?php

use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\InvoiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Welcome to my api

Route::get('/', function() {
    return response()->json(
        ['message'=> 'Welcome to my api'],
    );
});

/***
 * API V1
 */

 Route::group(['prefix'=> 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function() {
   Route::apiResource('customers', CustomerController::class);
   Route::apiResource('invoices', InvoiceController::class);
 });