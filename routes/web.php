<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// Returns all listings
Route::get('/', [ListingController::class, 'showAllListings']);

// Returns all listings
Route::get('/listings/{listing}', [ListingController::class, 'showOneListing']);
