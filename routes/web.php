<?php

use App\Http\Controller\UserTaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user task', UserTaskController::class);