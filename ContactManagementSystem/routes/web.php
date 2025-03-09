<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Place export route BEFORE resource route
Route::get('/contacts/export-pdf', [ContactController::class, 'exportPDF'])->name('contacts.export-pdf');

Route::resource('contacts', ContactController::class);
