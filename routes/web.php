<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;

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

Route::get('login', [UserAuthController::class, 'login'])->middleware('AlreadyLoggedIn');
Route::get('register', [UserAuthController::class, 'register'])->middleware('AlreadyLoggedIn');
Route::post('create', [UserAuthController::class, 'create'])->name('auth.create');
Route::post('check', [UserAuthController::class, 'check'])->name('auth.check');
Route::get('profile', [UserAuthController::class, 'profile'])->middleware('isLogged');
Route::get('logout', [UserAuthController::class, 'logout']);
Route::get('accueil', [UserAuthController::class, 'accueil']);

Route::get('ajout', [UserAuthController::class, 'ajout']);
Route::post('association','UserAuthController@association')->name('association.ajout');

//Route::get('/association/{id}',[UserAuthController::class, 'showdetail'])->name('users.show');