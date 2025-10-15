<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferanceThemeController;        
use App\Http\Controllers\ConferanceCommitteeController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ImportantDatesController;
use App\Http\Controllers\KeyNoteSpeakerController;


Route::resource('adminconferancetheme', ConferanceThemeController::class);

Route::resource('adminconferancecommittee', ConferanceCommitteeController::class);

Route::resource('adminhomepage', HomePageController::class);

Route::resource('adminimporantdate', ImportantDatesController::class);

Route::resource('adminkeynotespeaker', KeyNoteSpeakerController::class);