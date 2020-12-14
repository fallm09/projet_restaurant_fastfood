<?php

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

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/client/add', 'ClientsController@add')->name('addclient');
Route::get('/client/getAll','ClientsController@getALL')->name('getallclient');
Route::post('/client/persist','ClientsController@persist')->name('persistclient');
Route::get('/client/edit{id}','ClientsController@edit')->name('editclient');
Route::get('/client/search','ClientsController@search')->name('searchclient');

//Route:: get('clients, ClientsController);


Route::get('commande CommandeController');
//Route::resource('user', 'UserController');