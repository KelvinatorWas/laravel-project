<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;


Route::get('/', [ListingController::class, 'showAll']);
Route::get('/listings/create', [ListingController::class, 'create']);
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);
Route::post('/listings', [ListingController::class, 'store']);
Route::get('/listings/{listing}', [ListingController::class, 'showOne']);

