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
    return view('home');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/company', 'HomeController@company')->name('company');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/kasko', 'HomeController@kasko')->name('kasko');
Route::get('/dsdsago', 'HomeController@dsdsago')->name('dsdsago');
Route::get('/saveperson', 'HomeController@saveperson')->name('saveperson');
Route::get('/savepersontravel', 'HomeController@savepersontravel')->name('savepersontravel');
Route::get('/medic', 'HomeController@medic')->name('medic');
Route::get('/ns', 'HomeController@ns')->name('ns');
Route::get('/savehome', 'HomeController@savehome')->name('savehome');

Route::get('/calculators/osgop/', 'CalculatorController@osgop')->name('osgop');

Route::get(config('laravel_pages.view_pages_route'), '\Appoly\LaravelPages\Http\Controllers\PagesController@show')->name('laravel-pages.show');
