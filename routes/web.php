<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\MentionsLegalesController;
use App\Http\Controllers\TarifController;
use Illuminate\Support\Facades\Route;


Route::get('/', [AccueilController::class, 'index'])->name('accueil');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/cours', [CoursController::class, 'index'])->name('cours');
Route::get('/mentionsLegales', [MentionsLegalesController::class, 'index'])->name('MentionsLegales');
Route::get('/tarif', [TarifController::class, 'index'])->name('tarif');

