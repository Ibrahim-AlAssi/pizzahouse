<?php


use App\Http\Controllers\PizzaController;

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
Route::get('/', function () {
    return view('welcome');
  });
  
Route::get('/pizzas', [PizzaController::class, 'index'])->middleware("auth");
Route::get('/pizzas/create', [PizzaController::class, 'create']);
Route::post('/pizzas', [PizzaController::class, 'store']);
Route::get('/pizzas/{pizza}', [PizzaController::class, 'show']);
Route::delete('/pizzas', [PizzaController::class, 'destroy']);
  
//
//Route::get('/pizzas', 'PizzaController@index');
//Route::get('/pizzas/create', 'PizzaController@create');
//Route::post('/pizzas', 'PizzaController@store');
//Route::get('/pizzas/{pizza}', 'PizzaController@show');
//Route::delete('/pizzas/{pizza}', 'PizzaController@destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
