<?php

use App\Http\Controllers\MembreController;
use App\Models\Membre;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[MembreController::class, 'index']);
Route::get('/create',[MembreController::class, 'create']);
Route::get('/member-show/{id}',[MembreController::class, 'show']);
Route::get('/member-edit/{id}',[MembreController::class, 'edit']);
Route::post('/destroyAllHumans',[MembreController::class, 'destroyAllHumans']);

Route::post('/member-store',[MembreController::class, 'store']);
Route::post('/member-delete/{id}',[MembreController::class, 'destroy']);
Route::post('/member-update/{id}', [MembreController::class, 'update']);

