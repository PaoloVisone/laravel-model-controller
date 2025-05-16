<?php

use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

// Rotta che restituisce PageController
Route::get('/', [PageController::class, 'index']);
