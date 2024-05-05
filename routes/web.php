<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UMKMController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BerandaController::class, 'index'])->name('beranda');

Route::get('/profil', function () {
    return view('landingpage.profil');
})->name('profil');

Route::get('/layanan', function () {
    return view('landingpage.layanan');
})->name('layanan');

Route::get('/umkm', [UMKMController::class, 'indexGuest'])->name('guest.umkm.index');
Route::get('/umkm/{umkm}', [UMKMController::class, 'show'])->name('guest.umkm.show');

Route::get('/wisata', function () {
    return view('landingpage.wisata');
})->name('wisata');

Route::get('/galeri', [PhotoController::class, 'indexGuest'])->name('guest.galeri.index');
Route::get('/galeri/{photo}', [PhotoController::class, 'show'])->name('guest.galeri.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/admin/galeri', PhotoController::class)->except(['show']);
    Route::resource('/admin/umkm', UMKMController::class)->except(['show']);
});

require __DIR__ . '/auth.php';
