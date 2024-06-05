<?php

use Illuminate\Support\Facades\Route;

// Add a route for the main welcome page.
Route::get('/', function() {
    return view('welcome');
});

// Add a route for adding in a new debtor.
Route::get('/add-debtor', 'App\Http\Controllers\DebtorController@addDebtor');

// Add a post route that will save the debtor to the database.
Route::post('/add-debtor', 'App\Http\Controllers\DebtorController@saveDebtor');

// Add a route for viewing all debtors.
Route::get('/list-debtors', 'App\Http\Controllers\DebtorController@listDebtors');

// Add a route for viewing a single debtor in a cool thermometer widget.
Route::get('/view-debtor/{id}', 'App\Http\Controllers\DebtorController@viewDebtor');