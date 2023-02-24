<?php

use App\Http\Controllers\listingController;
use App\Models\listing;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



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
//All listings
Route::get('/',[listingController::class, 'index']);

//Show Create Form
Route::get('/listings/create', [listingController::class, 'create']);


//Single listing
Route::get('/listings/{listing}',[listingController::class, 'show']);

//Store listing
Route::post('/listings',[listingController::class, 'store']);