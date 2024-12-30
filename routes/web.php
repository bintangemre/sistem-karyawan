<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

// routes/web.php


Route::get('/', [WelcomeController::class, 'welcome']);