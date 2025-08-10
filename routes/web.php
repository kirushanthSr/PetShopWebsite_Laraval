<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::post('/appointment', [PageController::class, 'submitAppointment'])->name('appointment.submit');
