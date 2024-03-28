<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    public function showAll() {

        return view('listings.show-all', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6),
        ]);
    }

    public function showOne(Listing $listing) {
        return view('listings.show-one', [
            'listing' => $listing,
        ]);
    }

    public function create() {
        return view('listings.create');
    }

    public function edit(Listing $listing) {
        return view('listings.edit', [
            'listing' => $listing
        ]);
    }

    public function store(Request $request) {
        $formFields = $request->validate(
            [
                'company' => ['required', Rule::unique('listings', 'company')],
                'title' => 'required',
                'location' => 'required',
                'email' => ['required', 'email'],
                'website' => 'required',
                'tags' => 'required',
                'description' => 'required',
            ]
        );

        if ($request->hasFile("logo")) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->user()->id;
        
        Listing::create($formFields);

        return redirect('/')->with("success", "Listing created!");
    }

    public function update(Request $request, Listing $listing) {
        $formFields = $request->validate(
            [
                'company' => 'required',
                'title' => 'required',
                'location' => 'required',
                'email' => ['required', 'email'],
                'website' => 'required',
                'tags' => 'required',
                'description' => 'required',
            ]
        );

        if ($request->hasFile("logo")) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        } 
        
        $listing->update($formFields);

        return back()->with("success", "Listing edited!");
    }

    public function delete(Listing $listing) {
        $listing->delete();

        return redirect('/')->with('success', "Listing deleted!");
    }

}
