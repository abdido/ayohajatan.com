<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AqiqahController;
use App\Http\Controllers\KhitanController; 
use App\Http\Controllers\UltahController;
use App\Http\Controllers\WeddingController;

// Home Route
Route::get('/', [HomeController::class, 'index']);


#create Aqiqah route in group of Aqiqah
Route::group(['prefix' => 'aqiqah'], function () {
    // Template Aqiqah Invitation
    Route::get('/template1/{guestName?}', [AqiqahController::class, 'template1']);
    Route::get('/template2/{guestName?}', [AqiqahController::class, 'template2']);
    Route::get('/template3/{guestName?}', [AqiqahController::class, 'template3']);
    Route::get('/template4/{guestName?}', [AqiqahController::class, 'template4']);
    // Aqiqah Invitation List
});

#create khitan route in group of Khitan
Route::group(['prefix' => 'khitan'], function () {
    // Template Khitan Invitation
    Route::get('/template1/{guestName?}', [KhitanController::class, 'template1']);
    Route::get('/template2/{guestName?}', [KhitanController::class, 'template2']);
    Route::get('/template3/{guestName?}', [KhitanController::class, 'template3']);
    Route::get('/template4/{guestName?}', [KhitanController::class, 'template4']);
    // Khitan Invitation List
});

#create ultah route in group of ultah
Route::group(['prefix' => 'ultah'], function () {
    // Template Ultah Invitation
    Route::get('/template1/{guestName?}', [UltahController::class, 'template1']);
    Route::get('/template2/{guestName?}', [UltahController::class, 'template2']);
    Route::get('/template3/{guestName?}', [UltahController::class, 'template3']);
    Route::get('/template4/{guestName?}', [UltahController::class, 'template4']);
    // Ultah Invitation List
});


#create wedding route in group of wedding
Route::group(['prefix' => 'wedding'], function () {
    // Template Wedding Invitation
    Route::get('/template1/{guestName?}', [WeddingController::class, 'template1']);
    Route::get('/template2/{guestName?}', [WeddingController::class, 'template2']);
    Route::get('/template3/{guestName?}', [WeddingController::class, 'template3']);
    Route::get('/template4/{guestName?}', [WeddingController::class, 'template4']);
    // Test Wedding Invitation Route
    Route::get('/test/{guestName?}', [WeddingController::class, 'test']);
    Route::post('/test/v1/rsvp', [WeddingController::class, 'testConfirm']);
    Route::post('/test/v2/rsvp', [WeddingController::class, 'testConfirmV2']);


    // Wedding Invitation List
    Route::get('/dikanova/{guestName?}', [WeddingController::class, 'dikanova']);
});