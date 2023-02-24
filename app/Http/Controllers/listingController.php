<?php

namespace App\Http\Controllers;

use App\Models\listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class listingController extends Controller
{
    //Show All listings
    public function index(){
    
        return view ('listings.index', [
            'heading' => 'Latest Listings',
            'listings' => listing::latest()->filter(request(['tag','search']))->get()
         ]);
    }
     //Show single listing
     public function show(listing $listing){
        return view('listings.show', [
            'listing' => $listing
           ]);
    }
    
     //Show Create Form
     public function create(){
        return view('listings.create');
    }

    //Store Listing Data
    public function store(Request $request){
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => 'required',
            'tags' => 'required',
            'description' => 'required',
        ]);

        Listing::create($formFields);
        return redirect('/');
        
    }

}