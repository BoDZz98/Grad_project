<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\ProfileController;

/* 
    for searching for file -> ctrl+p 

    IGDb acces token is in the .env file and services.php

    php artisan make:livewire popular-games

    php artisan make:controller PhotoController -r

    where slug=\"{$slug}\";" 

    platforms id [48=ps4 , 6=pc, 49=xbox one ,]   abbreviation

    Carbon\Carbon::parse (To use carbon in a view)

    https://via.placeholder.com/264x352

*/


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

/* Route::get('/', function () {
    return view('index');
});

*/

Route::get('/',[GamesController::class,'index'])->name('games.index');
Route::get('/browse',[GamesController::class,'browse'])->name('games.browse');

Route::get('/games/{slug}',[GamesController::class,'show'])->name('games.show');
Route::get('/category/{name}',[GamesController::class,'categoryGames'])->name('games.categoryGames');

Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');

