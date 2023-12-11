<?php

use Illuminate\Support\Facades\Route;
use App\Models\Article;


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


//!les routes d'authentification
Auth::routes();

//Les routes propres au Voyager et au Admin
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//ArticleController
//Affichage de la page d'acceuil
Route::get('/', [App\Http\Controllers\ArticleController::class, 'indexAccueil'])->name('accueil');

//affichage des détail d'un article
Route::get('/details/{id}', [App\Http\Controllers\ArticleController::class, 'showDetails'])->name('details');

//store subscribedEmail
Route::post('/subscribe', [App\Http\Controllers\ArticleController::class, 'storeEmail'])->name('storeEmail');


