<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function showAllListings()
    {
        return view('listings.show-all', [
            'listings' => Listing::all(),
        ]);
    }

    public function showOneListing(Listing $listing)
    {
        return view('listings.show-one', [
            'listing' => $listing,
        ]);
    }
}
