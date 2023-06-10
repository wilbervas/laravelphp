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
route::middleware('auth')->group(function(){
    route::resources('projects',projectController::class);
});



Route::get('/proyecto', function () {
    return view('nombredelproyecto');
});
Route::get('/', function () {
    return view('alcaldia');
});
Route::get('/departamento', function () {
    return view('departamento');
});
Route::get('/aduana', function () {
    return view('aduana');
});