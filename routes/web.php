<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/',[PageController::class, 'home'])
    ->name('home');

Route::get('/contact', [PageController::class, 'contact'])
    ->name('pages.contact');

Route::get('/cgv', [PageController::class, 'cgv'])
    ->name('pages.cgv');

Route::get('/faq', [PageController::class, 'faq'])
    ->name('pages.faq');

Route::get('/faq', [PageController::class, 'faq'])
    ->name('pages.faq');

Route::get('/categories', [PageController::class, 'faq'])
    ->name('category.list');

Route::get('/auteurs', [AuthorController::class, 'index'])
    ->name('author.list');

Route::get('/auteurs/{auteur}', [AuthorController::class, 'profile'])
    ->name('author.profile');
