<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\FormationController;

// Route for displaying all formations
Route::get('formations', [FormationController::class, 'index'])->name('formations.index');

// Route for showing the form to create a new formation
Route::get('formations/create', [FormationController::class, 'create'])->name('formations.create');

// Route for storing a new formation
Route::post('formations', [FormationController::class, 'store'])->name('formations.store');

// Route for showing the form to edit an existing formation
Route::get('formations/{formation}/edit', [FormationController::class, 'edit'])->name('formations.edit');

// Route for updating an existing formation
Route::put('formations/{formation}', [FormationController::class, 'update'])->name('formations.update');

// Route for deleting an existing formation
Route::delete('formations/{formation}', [FormationController::class, 'destroy'])->name('formations.destroy');

// Routes pour Blogs
Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::post('blogs', [BlogController::class, 'store'])->name('blogs.store');
Route::get('blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
Route::put('blogs/{blog}', [BlogController::class, 'update'])->name('blogs.update');
Route::delete('blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');
// routes/web.php


// Routes pour Partenaires
Route::get('partenaires', [PartenaireController::class, 'index'])->name('partenaires.index');
Route::get('partenaires/create', [PartenaireController::class, 'create'])->name('partenaires.create');
Route::post('partenaires', [PartenaireController::class, 'store'])->name('partenaires.store');
Route::get('partenaires/{partenaire}/edit', [PartenaireController::class, 'edit'])->name('partenaires.edit');
Route::put('partenaires/{partenaire}', [PartenaireController::class, 'update'])->name('partenaires.update');
Route::delete('partenaires/{partenaire}', [PartenaireController::class, 'destroy'])->name('partenaires.destroy');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/formation', [PublicController::class, 'formation'])->name('formation');
Route::get('/formationcontinue', [PublicController::class, 'formationcontinue'])->name('formationcontinue');
Route::get('/formationexec', [PublicController::class, 'formationexec'])->name('formationexec');
Route::get('/formationorg', [PublicController::class, 'formationorg'])->name('formationorg');
Route::get('/partner', [PublicController::class, 'partner'])->name('partner');
Route::get('/contact-us', [PublicController::class, 'contactUs'])->name('contact-us');
Route::get('/events', [PublicController::class, 'events'])->name('events');
Route::get('/actualite', [PublicController::class, 'actualite'])->name('blog');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/event/{id}', [PublicController::class, 'showEvent'])->name('event.show');


Route::post('/actions/visit-profile/{user}', [ActionController::class, 'visitProfile'])->name('actions.visitProfile');
Route::post('/actions/make-call/{user}', [ActionController::class, 'makeCall'])->name('actions.makeCall');
