<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

//All Listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Heading',
        'listings' => Listing::all() 
    ]);
});

//Single Listing
Route::get('/listing/{id}', function($id) {
    return view('listing', [
        'heading' => 'Single Listing',
        'listings' => Listing::find($id)
    ]);
});