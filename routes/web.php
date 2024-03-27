<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;


Route::get('/', [ListingController::class, 'showAllListings']);
Route::get('/listings/{listing}', [ListingController::class, 'showOneListing']);
