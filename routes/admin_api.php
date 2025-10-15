<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferanceThemeController;        
use App\Http\Controllers\ConferanceCommitteeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ImportantDatesController;
use App\Http\Controllers\KeyNoteSpeakerController;


Route::resource('conferanceThemeController', ConferanceThemeController::class);

Route::resource('conferanceCommitteeController', ConferanceCommitteeController::class);

Route::resource('homePageController', HomePageController::class);

Route::resource('importrantDatesController', ImportantDatesController::class);

Route::resource('keyNoteSpeakerController', KeyNoteSpeakerController::class);