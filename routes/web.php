<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', [Controllers\IndexController::class, 'Index']);
Route::get('/about', [Controllers\AboutController::class, 'About']);
Route::get('/contact', [Controllers\ContactController::class, 'Contact']);

Route::get('/contact/{name}/{message?}', function(string $name, string $message="[Value not found]"){
    echo "Hello $name -- ";
    echo "Your message value is : $message";
});