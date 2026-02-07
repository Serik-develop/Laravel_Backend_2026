<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PracticeController;

Route::get('/practice', [PracticeController::class, 'index']);
