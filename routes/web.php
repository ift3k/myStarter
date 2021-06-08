<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::prefix('user')->group(function () {
    Route::get(
        '/add',
        [UserController::class, 'showUsers']
    )->name('showUsers');

    Route::get(
        '/list',
        [UserController::class, 'listUsers']
    )->name('listUsers');

    Route::get(
        '/edit',
        [UserController::class, 'editUsers']
    )->name('editUsers');
});
