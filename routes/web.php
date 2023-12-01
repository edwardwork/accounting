<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Models\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])
    ->name('home');

Route::get('/our-services', [HomeController::class, 'ourServices'])
    ->name('our-services');

Route::get('/resources', [HomeController::class, 'resources'])
    ->name('resources');

Route::get('/about-us', [HomeController::class, 'aboutUs'])
    ->name('about-us');

Route::get('/contact-us', [HomeController::class, 'contactUs'])
    ->name('contact-us');

Route::get('/for-professionals', [HomeController::class, 'forProfessionals'])
    ->name('for-professionals');

Route::post('/questions/create', [QuestionController::class, 'store'])
    ->name('create-question');

Route::get('/dashboard', static function () {
    $homePage = HomePage::firstOrFail();
    return view('dashboard', compact('homePage'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/upload-document', [ProfileController::class, 'uploadDocument'])->name('profile.upload-document');
    Route::post('/delete-document/{uuid}', [ProfileController::class, 'deleteDocument'])->name(
        'profile.delete-document'
    );
});

require __DIR__ . '/auth.php';
