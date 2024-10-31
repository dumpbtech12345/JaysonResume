<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController; // Import the controller

Route::get('/', function () {
    return view('welcome');
});

// Route for showing the resume page
Route::get('/resume', [ResumeController::class, 'index'])->name('resume.index');
