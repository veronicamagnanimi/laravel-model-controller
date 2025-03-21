<?php

use App\Http\Controllers\Guess\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class, 'index']);
