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
use Illuminate\Support\Facades\DB;
use App\Petition;
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('welcome');
});


/////////////materi hri-2

Route::get('petitions','PetititonController@index');
Route::get('petitions/create','PetititonController@create');
Route::get('petitions/{id}','PetititonController@show');
Route::post('petitions','PetititonController@store');

//update data
Route::get('petitions/{id}/edit','PetititonController@edit');
Route::put('petitions/{id}','PetititonController@update');
//delete data

///hapus data
Route::delete('petitions/{id}','PetititonController@destroy');

///////////materi hari-3
Route::get('test',function (){
    return view('layout.app');
});

/////auntentikasi
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('mypetitions',function (){
    return Auth::user()->petitions;
})->middleware('auth');