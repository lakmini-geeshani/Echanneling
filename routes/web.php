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
/*
Route::get('/', 'Auth\LoginController@showLoginForm' , function () {
    return view('home');
});

*/

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home'); 
Route::get('/profile', 'ProfileController@index')->name('user.profile');



                                                                                          //main home
Route::get('/',function(){
    return view('mainhome');
    });
    
Route::get('/userlogin','UserController@userlogin')->name('auth.userlogin');                   // user login       
Route::get('/userlogin', 'UserController@userlogin')->name('userlogin');




                                                                                             
//Route::get('/home' , 'AdminController@index');        

Route::prefix('admin')->group(function(){
    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@Login')->name('admin.login.submit');                    //admin login
    Route::get('/','AdminController@index')->name('admin.dashboard');
   // Route::get('submit', 'SubmitController@submit')->name('submit');
    //Route::get('show', 'AdminshowController@show')->name('show');
    //Route::post('show', 'AdminshowController@show')->name('show');

});

Route::prefix('adminappoiment')->group(function(){

    Route::get('/', 'AdminappoimentController@index')->name('adminappoiment.index');
    Route::get('/create','AdminappoimentController@create')->name('adminappoiment.create');          //admin appoiment
    Route::post('/store','adminAppoimentController@store')->name('adminappoiment.store');
    Route::get('{adminappoiment}/edit', 'AdminappoimentController@edit')->name('adminappoiment.edit');                  
    Route::patch('{adminappoiment}/edit','AdminappoimentController@update')->name('adminappoiment.update');
    Route::delete('{adminappoiment}/delete','AdminappoimentController@destroy')->name('adminappoiment.destroy');
    Route::get('/search', 'AdminAppoimentController@search')->name('adminappoiment.search');
}); 
 
Route::get("user", 'AdminAppoimentController@indexuser')->name('user.index');
//Route::get("user", 'AdminAppoimentController@indexuser')->name('user.result');
Route::prefix('user')->group(function(){
    Route::get('/search', 'AdminAppoimentController@searchuser')->name('user.search');
});

/*
Route::get("adminappoiment/create",'AdminappoimentController@index')->name('adminappoiment.create');
Route::post("adminappoiment",'AdminappoimentController@store')->name('adminppoiment.store');
Route::get("adminappoiment",'AdminappoimentController@show');
Route::get("adminappoiment/edit/{id}",'AdminappoimentController@edit');
Route::post("adminappoiment/update/{id}",'AdminappoimentController@update');
Route::delete("adminappoiment/delete/{id}",'AdminappoimentController@delete');

*/


Route::prefix('user')->group(function(){
    Route::get('appoiment', 'AppoimentController@show')->name('appoiment');
    Route::post('channel', 'ChanneldocController@index')->name('channel');                           //appoiment
    Route::get('channel', 'ChanneldocController@index')->name('channel'); 
});



Route::get('aboutus', 'AboutusController@aboutus')->name('aboutus');
Route::get('services', 'ServicesController@services')->name('services');
Route::get('contactus', 'ContactusController@contactus')->name('contactus');
Route::get('medicare', 'MedicareController@medicare')->name('medicare');

  /*   
Route::group([
    'prefix' => 'adminappoiment',  'middleware'], function(){
    Route::get('/', 'AdminAppoimentController@index')->name('adminappoiment.index');
    Route::get('create','AdminAppoimentController@create')->name('adminappoiment.create');          //admin appoiment
    Route::post('store','AdminAppoimentController@store')->name('adminappoiment.store');
    Route::get('{adminappoiment}/edit', 'AdminAppoimentController@edit')->name('adminappoiment.edit');                  
    Route::patch('{adminappoiment}/edit','AdminAppoimentController@update')->name('adminappoiment.update');
    Route::delete('{adminappoiment}/delete','AdminAppoimentController@destroy')->name('adminappoiment.destroy');
    Route::get('/search', 'AdminAppoimentController@search')->name('adminappoiment.search');
});
*/