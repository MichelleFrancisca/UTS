<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::get('/contacts', [ContactController::class, 'index']); // Menampilkan semua kontak
Route::post('/contacts', [ContactController::class, 'store']); // Membuat kontak baru
Route::get('/contacts/{contact}', [ContactController::class, 'show']); // Menampilkan detail kontak
Route::put('/contacts/{contact}', [ContactController::class, 'update']); // Memperbarui kontak
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy']); // Menghapus kontak

