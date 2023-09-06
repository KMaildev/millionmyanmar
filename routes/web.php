<?php

use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CorporateProfileController;
use App\Http\Controllers\EmploymentController;
use App\Http\Controllers\EntertainmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RealEstateController;
use App\Http\Controllers\TravelController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('contact', ContactController::class);
Route::resource('news', NewsController::class);
Route::resource('activities', ActivitiesController::class);
Route::resource('corporateprofile', CorporateProfileController::class);
Route::resource('travel', TravelController::class);
Route::resource('real_estate', RealEstateController::class);
Route::resource('employment', EmploymentController::class);
Route::resource('entertainment', EntertainmentController::class);
