<?php

use App\Http\Controllers\AuthorController;
use Illuminate\Support\Facades\Route;

// PRimero hacemos la referencia al controller, en este caso editorialController para empezar
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});
// La ruta que crearemos, el url tiene que ser en plural, si o si /editorials, luego le pasamos el controllador EditorialController seguido del método, en este caso index, luego le podemos dar un nombre de referencia, name
Route::get('/editorials', [EditorialController::class, 'index'])->name('editorials.index');

Route::get('/genders',[GenderController::class, 'index'])->name('genders.index');


Route::get('/books', [BookController::class, 'index'])->name('books.index');

Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');

Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');

Route::get('/users', [UserController::class, 'index'])->name('users.index');