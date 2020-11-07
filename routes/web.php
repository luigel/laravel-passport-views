<?php

use Illuminate\Support\Facades\Route;
use Luigel\LaravelPassportViews\Http\Controllers\ClientController;

Route::get(config('laravel-passport-views.route'), [ClientController::class, 'index']);
