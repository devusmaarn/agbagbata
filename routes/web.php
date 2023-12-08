<?php

use App\Http\Controllers\GithubAutoPullController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::post('/deploy', GithubAutoPullController::class);