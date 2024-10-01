<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [PortfolioController::class, 'index'])->name('home');

Route::get('/realisations', [PortfolioController::class, 'projects'])->name('projects');
Route::post('/realisations', [PortfolioController::class, 'store'])->name('realisations.store');
Route::get('/realisations/{id}', [PortfolioController::class, 'show'])->name('project.show');
Route::get('create', [PortfolioController::class, 'create'])->name('realisations.create');

Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
Route::post('/contact', [PortfolioController::class, 'sendContact']);
// Route pour afficher la page de contact
Route::get('/contact', function () {
    return view('portfolio.contact'); // Si ta vue est dans 'resources/views/portfolio/contact.blade.php'
})->name('contact');
// Route pour traiter le formulaire de contact
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// routes/web.php
Route::get('/game', function () {
    return view('portfolio.game');
});


require __DIR__.'/auth.php';
