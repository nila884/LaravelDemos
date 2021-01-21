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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PagesController@index');
// Route::get('/about', 'PagesController@about');
// Route::get('/services', 'PagesController@services');

Route::prefix('property')->group(function () {
    Route::get('/get', 'PropertiesController@getUserProperties');
    Route::get('/show/{id}', 'PropertiesController@showProperty');

});
Auth::routes([
   
]);
Route::group(['middleware'=>'auth','prefix'=>'admin'], function(){
    Route::get('/', 'PropertiesController@index');
    // Route::resource('property','PropertiesController');
    Route::delete('/image-delete/{id}', 'PropertiesController@deleteImage');
    Route::get('/property/with/{id}', 'PropertiesController@propertyWithId');
    Route::get('/properties', 'PropertiesController@getProperties');
    Route::put('/property-update/{id}', 'PropertiesController@update');
    Route::post('/property', 'PropertiesController@store');
    Route::delete('/property/{id}', 'PropertiesController@destroy');

}); 

Route::group([],function(){
    
});