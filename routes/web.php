<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/',[PageController::class,'index'])->name('index');

// route untuk profile
Route::get('/profile', [PageController::class, 'profile'])->name('front.profile');

// route untuk struktur 
Route::get('/struktur',[PageController::class, 'struktur'])->name('front.struktur');
Route::get('/struktur/{departement:slug}', [PageController::class, 'detailDepartement'])
    ->name('front.detailDepartement');

Route::get('/contact', [PageController::class, 'contact'])->name('front.contact');

Route::get('article', [PageController::class, 'article'])->name('front.article');

// Route untuk kategori artikel
Route::get('/browse/{category:slug}', [PageController::class, 'category'])->name('front.categoryArticle');
// detail artikel
Route::get('/detail/{articles:slug}', [PageController::class, 'detailArticle'])->name('front.detailArticle');

// contact
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');