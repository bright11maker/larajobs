<?php

use App\Models\listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\listingController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* 
//Common Resources Routes:
// index - Show all listings
// show - show single listing
// create - show form to create new listing
// store - store new listing 
// edit - show form to edit listing
// update - update listing
// destroy - delete listing

*/


//All listings
Route::get('/',[listingController::class, 'index']);

//Show Create Form
Route::get('/listings/create', [listingController::class, 'create']);

//Store listing Data
Route::post('/listings',[listingController::class, 'store']);

//show Edit Form
Route::get('/listings/{listing}/edit', [listingController::class, 'edit']);

//Update Listing
Route::put('/listings/{listing}', [listingController::class, 'update']);

//Delete Listing
Route::delete('/listings/{listing}', [listingController::class, 'destroy']);

//Single listing
Route::get('/listings/{listing}',[listingController::class, 'show']);

//Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);

//Create New User
Route::post('/users', [UserController::class, 'store']);