<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Show the form at: http://127.0.0.1:8000/create
Route::view('create', 'createcontact');

// Handle form submission (POST)
Route::post('create-contact', [ContactController::class, 'createContact']);
Route::get('display', [ContactController::class, 'showContacts']);
Route::get('edit-contact/{id}', [ContactController::class, 'edit']);
Route::post('update-contact/{id}', [ContactController::class, 'update']);
Route::get('delete-contact/{id}', [ContactController::class, 'delete']);
