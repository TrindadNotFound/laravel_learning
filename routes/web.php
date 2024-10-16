<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', [Controllers\IndexController::class, 'Index']);
Route::get('/about', [Controllers\AboutController::class, 'About']);
Route::get('/contact', [Controllers\ContactController::class, 'Contact']);

//Definicao de uma Route onde 'e feita uma validacao atraves da funcao "where" para saber se os parametros (neste caso job_id e name) cumpem os requisitos :
// - Ser um inteiro
// - Ser uma cadeia de caracteres
Route::get('/contact/{name}/{job_id}', function(string $name='Null', int $job_id=0){
    echo "Hello $name -- ";
    echo "Your job id is : $job_id";
})-> where('job_id', '[0-9]+') -> where('name', '[A-Za-z]+');