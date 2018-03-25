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

//Route::get('/', function () { return view('welcome');});
    //cand vom vizita pagina root (‘/’) se va apela metoda index a controller-ului WelcomeControlle
    Route::get('/', 'WelcomeController@index');
//cand vom vizita pagina home (‘home’) se va apela metoda index a controller-ului HomeController
    Route::get('home', 'HomeController@index');

Route::get('contact', 'WelcomeController@contact');
//cand vom vizita pagina ‘contact’ se va apela metoda contact a controller-ului WelcomeController
