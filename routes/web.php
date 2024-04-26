<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});
// Menampilkan semua kontak
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

// Menampilkan formulir tambah kontak
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

// Menyimpan kontak baru
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

// Menampilkan formulir edit kontak
Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');

// Memperbarui kontak yang ada
Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');

// Menghapus kontak
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');

// Mencari kontak
Route::get('/contacts/search', [ContactController::class, 'search'])->name('contacts.search');
