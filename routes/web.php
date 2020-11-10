<?php

use App\Http\Controllers\WeightController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(
    [
        'verify' => true
    ]
);

Route::redirect('/', 'weights');

Route::resource('weights', WeightController::class);
