<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Authentification Routes
Auth::routes();

// Routes génériques
Route::get('/', function () { 
    return view('Home'); 
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// Routes Publiques pour les articles
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->where('id', '[0-9]+')->name('articles.show');
Route::get('/articles/cat/{category}', [ArticleController::class, 'byCategory'])->where('category', '[A-Za-zÀ-ÖØ-öø-ÿ\s]+')->name('articles.category');

// Routes Admin (Sécurisées)
Route::middleware(['auth', 'adminuser'])->group(function () {
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->where('id', '[0-9]+')->name('articles.edit');
    Route::put('/articles/{id}', [ArticleController::class, 'update'])->where('id', '[0-9]+')->name('articles.update');
    Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])->where('id', '[0-9]+')->name('articles.destroy');
});

// Espace Client (Sécurisé User)
Route::get('/espaceclient', [ArticleController::class, 'espaceClient'])->name('espaceclient')->middleware(['auth', 'useruser']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route temporaire pour devenir ADMIN (à supprimer après test)
Route::get('/boost-admin', function() {
    $user = Auth::user();
    if ($user) {
        $user->role = 'ADMIN';
        $user->save();
        return "Félicitations " . $user->name . " ! Vous êtes maintenant ADMIN. <a href='/articles'>Retour à la collection</a>";
    }
    return "Veuillez vous connecter d'abord.";
});

// Routes de Mailing
Route::get('/email', [ArticleController::class, 'email'])->name('email.form');
Route::post('/send/email', [ArticleController::class, 'sendEmail'])->name('send.email');

