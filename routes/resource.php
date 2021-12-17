<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Resource\UserPositionController;

Route::resource('userposition',UserPositionController::class);