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


Route::get('', ['middleware' => 'cors', function()
{
    return '';
}]);


Route::get('breweries', ['middleware' => 'cors', function()
{
    return \Response::json(\App\Brewery::with('beers', 'geocode')->paginate(10), 200);
}]);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('logout', 'Auth\LoginController@logout');
Auth::routes();

Route::get('/scrape', 'MainscrapingController@searchwithKeyword');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/info', 'MainscrapingController@getdetailInfo');
Route::get('/mail/send', 'MailController@send');
Route::get('/mail/template', 'MailController@index');
Route::get('/blacklist/manage', 'HomeController@blacklist');
Route::get('/permission/manage', 'HomeController@permission');
Route::get('/blacklist/delete/{id}', 'HomeController@blacklistDelete');

Route::post('/home/scrape', 'MainscrapingController@searchwithKeyword');
Route::post('/home/addkeyword', 'MainscrapingController@addkeyword');
Route::post('/home/getDomains', 'HomeController@getDomains');
Route::post('/home/getEmail', 'HomeController@getEmail');
Route::post('/mail/sendAll', 'MailController@sendAll');
Route::post('/mail/save', 'MailController@save');
Route::post('/blacklist/insertD', 'HomeController@insertD');
Route::post('/blacklist/insertE', 'HomeController@insertE');
Route::post('/blacklist/insertN', 'HomeController@insertN');
Route::post('/blacklist/getDomains', 'HomeController@getBlacklistDomains');
Route::post('/blacklist/getEmails', 'HomeController@getBlacklistEmails');
Route::post('/blacklist/getNames', 'HomeController@getBlacklistNames');
Route::post('/permission/setPermission', 'HomeController@setPermission');
