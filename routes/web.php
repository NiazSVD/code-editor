<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/editor/{language}', [FrontendController::class, 'editor'])->name('frontend.editor');
Route::post('/run-code', [FrontendController::class, 'runCode'])->name('frontend.runCode');

