<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get ('/formateur.login', function () {
    return view('formateur.login');
});
Route::get ('/apprennent.login', function () {
    return view('apprenant.login');
}); 
Route::get ('/apprennent.nouveau', function () {
    return view('apprenant.nouveau_add');
})->name('nouveau_add');
Route::get('ajout', function () {
    return view('formateur.Ajout');
});
Route::get('info', function () {
    return view('formateur.info');
})->name('info');
Route::get('edit', function () {
    return view('formateur.edit');
})->name('edit');
Route::get('/for', function () {
    return view('formateur.auto_evaluation'); 
})->name('for');
Route::get('app', function () {
    return view('apprenant.nive');
})->name('apprenant');
Route::get('/ajout', function () {
    return view('formateur.Ajout'); 
})->name('ajout');