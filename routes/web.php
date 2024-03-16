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
// Creamos la ruta de crear una editorial, luego vamos a la vista create.blade.php
Route::get('editorials/create', [EditorialController::class, 'create'])->name('editorials.create');
// creamos la ruta para enviar el formulario, osea enviar datos utilizamos post
Route::post('/editorials/create', [EditorialController::class, 'store'])->name('editorials.store');
Route::get('/editorials/edit/{id}', [EditorialController::class, 'edit'])->name('editorials.edit');
Route::put('/editorials/edit/{id}', [EditorialController::class, 'update'])->name('editorials.update');


Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController:: class, 'create'])->name('books.create');
Route::post('/books/create', [BookController::class, 'store'])->name('books.store');
Route::get('/books/edit/{id}', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/edit/{id}', [BookController::class, 'update'])->name('books.update');


Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');


Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profiles.create');
Route::post('/profiles/store', [ProfileController::class, 'store'])->name('profiles.store');


Route::get('/genders',[GenderController::class, 'index'])->name('genders.index');
Route::get('/genders/create', [GenderController::class, 'create'])->name('genders.create');
Route::post('genders/create', [GenderController::class,'store'])->name('genders.store');


Route::get('/users', [UserController::class, 'index'])->name('users.index');

