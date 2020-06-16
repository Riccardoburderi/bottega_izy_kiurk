<?php

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

Route::resource('bottega','BottegaController'); 
Route::get('catalogo','CatalogoController@index'); //questo dovrà visualizzare tutti gli animali con le info necessarie
Route::get('certificato/{certificato}','CertController@show')->name('certificato');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('students', 'StudentController')->middleware('auth');
Route::resource('categories','CategoryController')->middleware('auth');
Route::resource('subcategories','SubcategoryController')->middleware('auth');
Route::resource('animals','AnimalController')->middleware('auth');

/* Route::resource('certificates','CertificateController')->middleware('auth');
 */
Route::post('certificates','CertificateController@store')->name('certificates.store')->middleware('auth');
Route::post('certificates/create/{animal}',function(){
    return view('index_animal');
})->name('certificates.create')->middleware('auth');
Route::get('certificates','CertificateController@index')->name('certificates.index')->middleware('auth');
Route::get('certificates/{certificate}/edit','CertificateController@edit')->name('certificates.edit')->middleware('auth');
Route::patch('certificates/{certificate}','CertificateController@update')->name('certificates.update')->middleware('auth');
Route::delete('certificate/{certificate}','CertificateController@destroy')->name('certificates.destroy')->middleware('auth');

