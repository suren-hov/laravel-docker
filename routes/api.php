<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return ["version" => app()->version()];
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
