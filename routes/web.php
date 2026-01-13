<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\AuthController;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil-madrasah', [HomeController::class, 'profil'])->name('profil');
Route::get('/visi-misi', [HomeController::class, 'visiMisi'])->name('visi-misi');
Route::get('/sejarah', [HomeController::class, 'sejarah'])->name('sejarah');
Route::get('/struktur-organisasi', [HomeController::class, 'strukturOrganisasi'])->name('struktur-organisasi');
Route::get('/program-akademik', [HomeController::class, 'programAkademik'])->name('program-akademik');
Route::get('/ekstrakurikuler', [HomeController::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
Route::get('/kelas-tahfidz', [HomeController::class, 'kelasTahfidz'])->name('kelas-tahfidz');
Route::get('/extra-beragam', [HomeController::class, 'extraBeragam'])->name('extra-beragam');
Route::get('/madrasah-diniyah', [HomeController::class, 'madrasahDiniyah'])->name('madrasah-diniyah');
Route::get('/fasilitas', [HomeController::class, 'fasilitas'])->name('fasilitas');
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');

// Admin Auth Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    
    // Protected Admin Routes
    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        
        // Teachers Management
        Route::resource('teachers', TeacherController::class);
        
        // News Management
        Route::resource('news', NewsController::class);
        Route::post('news/upload-image', [NewsController::class, 'uploadImage'])->name('news.upload-image');
        
        // Gallery Management
        Route::resource('galleries', GalleryController::class);
        
        // Settings Management
        Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
        Route::post('/settings', [SettingsController::class, 'update'])->name('settings.update');
        
        // Categories Management
        Route::resource('categories', CategoryController::class);
        
        // Tags Management
        Route::resource('tags', TagController::class);
    });
});
