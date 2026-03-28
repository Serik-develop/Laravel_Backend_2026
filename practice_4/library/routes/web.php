<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['check.status'])->group(function () {

    Route::get('/dashboard', function () {
        return "Dashboard only for active users";
    });

});
Route::get('/account-status', function () {
    return "Your account is not active.";
});