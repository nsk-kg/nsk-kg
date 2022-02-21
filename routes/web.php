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
Route::get('/cabinet', 'CabinetController@index')->name('cabinet');
Route::get('/cabinet/life', 'CabinetController@life')->name('cabinet.life');
Route::get('/cabinet/document/{id}', 'CabinetController@document')->name('cabinet.document');

Route::post('/story', 'HomeController@story')->name('story');
Route::post('/storyMessage', 'HomeController@storyMessage')->name('storyMessage');

Route::post('/recaptcha', 'HomeController@recaptcha')->name('recaptcha');

Route::get('/nsur', 'HomeController@nsur')->name('nsur');
Route::get('/gruz', 'HomeController@gruz')->name('gruz');
Route::get('/autour', 'HomeController@autour')->name('autour');
Route::get('/saveur', 'HomeController@saveur')->name('saveur');
Route::get('/savepep', 'HomeController@savepep')->name('savepep');
Route::get('/obot', 'HomeController@obot')->name('obot');
Route::get('/otwork', 'HomeController@otwork')->name('otwork');
Route::get('/obsave', 'HomeController@obsave')->name('obsave');
Route::get('/company', 'HomeController@company')->name('company');
Route::get('/companyWork', 'HomeController@companyWork')->name('companyWork');
Route::get('/audit', 'HomeController@audit')->name('audit');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/kasko', 'HomeController@kasko')->name('kasko');
Route::get('/dsdsago', 'HomeController@dsdsago')->name('dsdsago');
Route::get('/saveperson', 'HomeController@saveperson')->name('saveperson');
Route::get('/savepersontravel', 'HomeController@savepersontravel')->name('savepersontravel');
Route::get('/medic', 'HomeController@medic')->name('medic');
Route::get('/ns', 'HomeController@ns')->name('ns');
Route::get('/savehome', 'HomeController@savehome')->name('savehome');

Route::get('/ensuranse', 'HomeController@ensuranse')->name('ensuranse');
Route::post('/ensuranse/create', 'HomeController@ensuranseCreate')->name('ensuranseCreate');


Route::get('/calculators/osgop/', 'CalculatorController@osgop')->name('osgop');
Route::get('/calculators/osopo/', 'CalculatorController@osopo')->name('osopo');
Route::get('/calculators/osgopog/', 'CalculatorController@osgopog')->name('osgopog');
Route::get('/calculators/osgpopp/', 'CalculatorController@osgpopp')->name('osgpopp');

Route::get(config('laravel_pages.view_pages_route'), '\Appoly\LaravelPages\Http\Controllers\PagesController@show')->name('laravel-pages.show');

Route::get('/topmanagement', 'HomeController@topmanagement')->name('topmanagement');
Route::get('/partners', 'HomeController@partners')->name('partners');
Route::get('/clients', 'HomeController@clients')->name('clients');
Route::get('/finances', 'HomeController@finances')->name('finances');
Route::get('/reinsurance', 'HomeController@reinsurance')->name('reinsurance');
Route::get('/insrules', 'HomeController@insrules')->name('insrules');
Route::get('/insblog', 'HomeController@insblog')->name('insblog');
Route::get('/interest', 'HomeController@interest')->name('interest');
Route::get('/kaskosto', 'HomeController@kaskosto')->name('kaskosto');
Route::get('/becomeagent', 'HomeController@becomeagent')->name('becomeagent');




