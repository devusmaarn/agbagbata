<?php

use App\Http\Controllers\GithubAutoPullController;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard\Home;
use App\Livewire\HomePage;
use App\Livewire\Dashboard\Project\Create as CreateProject;
use App\Livewire\Dashboard\Project\Index as AllProjects;
use Illuminate\Support\Facades\Route;


Route::get('/', HomePage::class)->name('home');

Route::post('/deploy', GithubAutoPullController::class);

Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
});

Route::middleware('auth')->group(function () {

    Route::group(['prefix' => '/dashboard'], function() {
        Route::get('/', Home::class)->name('dashboard');

        Route::group(['prefix' => '/projects', 'as' => 'project.'], function() {

            Route::get('/', AllProjects::class)->name('index');
            Route::get('/create', CreateProject::class)->name('create');
        });
    });


});