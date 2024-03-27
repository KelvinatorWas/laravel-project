<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function showAllListings() {

        return view('listings.show-all', [
            'listings' => Listing::latest()->filter(request(['tag']))->get(),
        ]);
    }

    public function showOneListing(Listing $listing) {
        return view('listings.show-one', [
            'listing' => $listing,
        ]);
    }
}
