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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', function () {
    return view('post');
});

Route::get('/admin', function () {
    return view('layouts.admin');
});
Route::get('/testweb', function () {
    return view('layouts.web');
});



Route::get('/testadmin', function () {
    return view('admin');
});




/* main route */

Route::get('/main', 'MainController@index');
Route::get('/contactus', 'Msg_web@send');
Route::post('/contactus', 'Msg_web@send');

Route::get('/section/{id}', 'MainController@post');
Route::get('/post/{id}', 'MainController@singlepost');
Route::post('/post/{id}', 'MainController@singlepost');



/*end main */

/* route section	*/

route::prefix('admin')->middleware('Admin')->group(function(){
Route::get('/main', function () {
    return view('admin.admin_main');
});

route::prefix('section')->group(function(){
	
Route::get('/', 'SectionController@index');

	
Route::post('/add', 'SectionController@store');
Route::get('/add', 'SectionController@store');
Route::get('/{id}/edit', 'SectionController@edit');
Route::get('/update', 'SectionController@store');

Route::post('/{id}/delete', 'SectionController@destroy');
Route::get('/{id}/delete', 'SectionController@destroy');
		
	
});
																				
});
										
										
										
/* route image	*/
route::prefix('admin')->middleware('Admin')->group(function(){
route::prefix('photo')->group(function(){
	
Route::post('/add', 'PhotoController@store');
Route::get('/add', 'PhotoController@store');
Route::get('/', 'PhotoController@index');
Route::get('/{id}/delete', 'PhotoController@destroy');
Route::post('/{id}/delete', 'PhotoController@destroy');
		
	
});
																				
});

										
	/* route Post	*/
									
										
										
										
	
route::prefix('admin')->middleware('Admin')->group(function(){
route::prefix('post')->group(function(){
	
Route::get('/', 'PostController@index');

	
Route::post('/add', 'PostController@store');
Route::get('/add', 'PostController@store');
Route::get('/{id}/edit', 'PostController@edit');
Route::post('/{id}/update', 'PostController@update');
Route::get('/{id}/update', 'PostController@update');

Route::post('/{id}/delete', 'PostController@destroy');
Route::get('/{id}/delete', 'PostController@destroy');
		
	
});
																				
});
/**/
route::prefix('admin')->middleware('Admin')->group(function(){
route::prefix('user')->group(function(){
	
Route::post('/add', 'UserController@store');
Route::get('/add', 'UserController@store');
Route::get('/', 'UserController@index');
Route::get('/{id}/delete', 'UserController@destroy');
Route::post('/{id}/delete', 'UserController@destroy');
Route::get('/{id}/update', 'UserController@update');
Route::post('/{id}/update', 'UserController@update');		
	
});
																				
});										
										
										
route::prefix('admin')->middleware('Admin')->group(function(){
route::prefix('messages')->group(function(){
	

Route::get('/', 'Msg_web@index');
Route::get('/read/{id}', 'Msg_web@show');

	
});
																				
});										














