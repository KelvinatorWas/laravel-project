<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// Returns all listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Jobs',
        'listings' => Listing::all(),
    ]);
});

Route::get('/listings/{listing}', function (Listing $listing) {
    return view('listing', [
        'listing' => $listing,
    ]);
});
