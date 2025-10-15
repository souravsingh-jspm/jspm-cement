<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferanceThemeController;        
use App\Http\Controllers\ConferanceCommitteeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ImportantDatesController;
use App\Http\Controllers\KeyNoteSpeakerController;


Route::resource('conferancetheme', ConferanceThemeController::class);

Route::resource('conferancecommittee', ConferanceCommitteeController::class);

Route::resource('homepage', HomePageController::class);

Route::resource('importantdates', ImportantDatesController::class);

Route::resource('keynotespeaker', KeyNoteSpeakerController::class);