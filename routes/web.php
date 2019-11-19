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
Route::post('products', 'ProductController@update');

Route::get('products', function () {
    return View::make('products');
});

Route::get('products/{id}/edit/', [ 'as' => 'index.edit', 'uses' => 'Cadastro_Controller@edit'],function(){
    $cadastros = App\Cadastro::all();
    return view('products/{id}/edit/',compact('cadastros'));});
Route::get('inserir', function () {
    $cadastros = App\Cadastro::all();
    return view('registre', compact('products'));
})->name('inserir');

Route::group(['middleware' => 'admin'], function(){
	Route::get('/admin', 'AdminController@index');
	Route::get('/admin/login', 'AdminController@login');
	Route::post('/admin/login', 'AdminController@postlogin');
});

Route::get('/admin', 'ProductController@index');
Route::get('/admin/login', 'ProductController@login');
Route::post('/admin/login', 'ProductController@postlogin');

Route::get('/register', 'product_controller@index');

Auth::routes();
Route::get('index', function(){
    return view('index');
})->name('index');

Route::resource('products', 'ProductController');
Route::resource('atualiza', 'update');
Route::get('/', function () {
    return view('welcome');
});
