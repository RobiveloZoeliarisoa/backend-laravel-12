<?php

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
