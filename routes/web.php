<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// Returns all listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all(),
    ]);
});

Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'heading' => 'Only One Listing',
        'listing' => Listing::find($id),
    ]);
});
