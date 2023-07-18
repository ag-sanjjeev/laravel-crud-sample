<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CrudController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
Route::post('/login', [CustomAuthController::class, 'authenticate'])->name('login.authenticate');

Route::get('/registration', [CustomAuthController::class, 'registration'])->name('registration');
Route::post('/registration', [CustomAuthController::class, 'register'])->name('registration.create');

Route::post('/logout', [CustomAuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function() {

	Route::get('/', function() {
		return view('welcome');
	})->name('index');

	Route::get('/crud', [CrudController::class, 'index'])->name('crud');
	Route::get('/crud/create', [CrudController::class, 'create'])->name('crud.create');
	Route::post('/crud/store', [CrudController::class, 'store'])->name('crud.store');
	Route::get('/crud/edit/{id}', [CrudController::class, 'edit'])->name('crud.edit');
	Route::delete('/crud/delete/{id}', [CrudController::class, 'delete'])->name('crud.delete');
	// Route::resource('crud', [CrudController::class]);

});