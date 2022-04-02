<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeaOfStrangerController;


Route::get('/', [SeaOfStrangerController::class, 'index']);
Route::get('/chapter/{chapter_number}', [SeaOfStrangerController::class, 'readByChapter']);
Route::get('/all-chapters', [SeaOfStrangerController::class, 'readAllChapters']);
Route::get('/foreword', [SeaOfStrangerController::class, 'foreword']);