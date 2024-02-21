<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController as ComicController;
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

Route::get('/', [ComicController::class,'index']);

Route::resource('comics' , ComicController::class);

Route::get('/main/{param}', function($param) {

    $comics = config('comics');

    $comic = null;
    foreach ($comics as $item ) {
        if($item['sale_date'] == $param){
            $comic = $item;
        }
    }

    return view('single', compact('comic'));
})->name('single');