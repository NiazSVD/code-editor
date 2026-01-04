<?php

use App\Http\Controllers\Frontend\FrontendController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/clear', function () {
    $exitCode = Artisan::call('optimize');
    return $exitCode;
});

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/editor/{language}', [FrontendController::class, 'editor'])->name('frontend.editor');
Route::post('/run-code', [FrontendController::class, 'runCode'])->name('frontend.runCode');


Route::post('/share-code', [FrontendController::class, 'shareCode'])->name('frontend.shareCode');
Route::get('/share/{token}', [FrontendController::class, 'openShared'])->name('frontend.openShared');
