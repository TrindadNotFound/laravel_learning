<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', [Controllers\IndexController::class, 'Index']);
Route::get('/about', [Controllers\Aboutcontroller::class, 'About']);
Route::get('/contact', [Controllers\ContactController::class, 'Contact']);

Route::get('/contact/{id}', function($id){
    echo "$id está aqui!";
});