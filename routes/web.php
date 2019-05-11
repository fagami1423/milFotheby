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


// Route::get('/admin/add-item','AdminController@showAddForm')->name('admin.showAddForm');

// Route::post('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
	Auth::routes();

	Route::get('/', 'PageController@index');
	Route::get('/home', 'PageController@index');
	Route::get('/search','SearchController@search')->name('search.items');
	Route::get('/search/price','SearchController@searchPrice');
	Route::get('/search/artist','SearchController@searchArtist');

	// Route::get('/items','PageController@showItems');
	Route::resource('items','ItemsController');
	Route::resource('events','EventsController');
	Route::resource('bids','BidsController');

	Route::get('/drawings','PageController@showDrawings');
	Route::get('/paintings','PageController@showPaintings');
	Route::get('/photographs','PageController@showPhotographs');
	Route::get('/sculptures','PageController@showSculptures');
	Route::get('/carvings','PageController@showCarvings');

	Route::get('/auction/index','AuctionController@index')->name('auction.index');
	Route::get('/auction/create','AuctionController@create')->name('auction.create');
	Route::post('/auction/store','AuctionController@store')->name('auction.store');
	Route::get('/auction/{id}/show','AuctionController@show')->name('auction.show');
	Route::get('/auction/{id}/edit','AuctionController@edit')->name('auction.edit');
	Route::resource('auction','AuctionController',['except'=>['index','create','store','edit','show']]);

	Route::get('/advanceSearch','AdminController@showAdvanceSearch')->name('advance.search');

Route::prefix('admin')->group(function(){
	
	Route::get('/','AdminController@index')->name('admin.dashboard');
	Route::get('/login', 'Auth\LoginAdminController@showLoginForm')->name('admin.loginForm');
	Route::post('/loginAdmin', 'Auth\LoginAdminController@login')->name('admin.login');
	Route::get('/logout', 'Auth\LoginAdminController@logout')->name('admin.logout');

	Route::get('/search','AdminController@showSearch')->name('item.search');
	Route::get('/searchItem','AdminController@searchItems');

	Route::get('/categorySearch','AdminController@searchByCategories');
	Route::get('/priceSearch','AdminController@searchByPrice');

	Route::get('/item/index','\App\Http\Controllers\Admin\ItemController@index')->name('item.index');
	Route::get('/item/create','\App\Http\Controllers\Admin\ItemController@create')->name('item.create');
	Route::post('/item/store','\App\Http\Controllers\Admin\ItemController@store')->name('item.store');
	Route::get('/item/{id}/edit','\App\Http\Controllers\Admin\ItemController@edit')->name('item.edit');
	Route::get('/item/{id}/destroy','\App\Http\Controllers\Admin\ItemController@destroy')->name('item.destroy');
	Route::resource('item','\App\Http\Controllers\Admin\ItemController',['except'=>['show','index','create','store','edit','destroy']]);

	Route::get('/category/index','\App\Http\Controllers\Admin\CategoryController@index')->name('category.index');
	Route::get('/category/create','\App\Http\Controllers\Admin\CategoryController@create')->name('category.create');
	Route::post('/category/store','\App\Http\Controllers\Admin\CategoryController@store')->name('category.store');
	Route::get('/category/{id}/edit','\App\Http\Controllers\Admin\CategoryController@edit')->name('category.edit');
	Route::get('/category/{id}/destroy','\App\Http\Controllers\Admin\CategoryController@destroy')->name('category.destroy');
	Route::resource('category','\App\Http\Controllers\Admin\CategoryController',['except'=>['index','create','store','edit','destroy']]);

	Route::get('/event/index','\App\Http\Controllers\Admin\EventController@index')->name('event.index');
	Route::get('/event/create','\App\Http\Controllers\Admin\EventController@create')->name('event.create');
	Route::post('/event/store','\App\Http\Controllers\Admin\EventController@store')->name('event.store');
	Route::get('/event/{id}/edit','\App\Http\Controllers\Admin\EventController@edit')->name('event.edit');
	Route::get('/event/{id}/destroy','\App\Http\Controllers\Admin\EventController@destroy')->name('event.destroy');
	Route::resource('event','\App\Http\Controllers\Admin\EventController',['except'=>['index','create','store','edit','destroy']]);
	
	Route::get('/client/index','\App\Http\Controllers\Admin\ClientController@index')->name('client.index');
	Route::post('/client/{id}/updateApprove','\App\Http\Controllers\Admin\ClientController@updateApprove')->name('client.updateApprove');
	Route::get('/client/{id}/destroy','\App\Http\Controllers\Admin\ClientController@destroy')->name('client.destroy');
	Route::resource('client','\App\Http\Controllers\Admin\ClientController',['except'=>['index','destroy']]);

	Route::get('/requestItem/index','\App\Http\Controllers\Admin\RequestItemController@index')->name('requestItem.index');
	Route::post('/requestItem/updateApprove/{id}','\App\Http\Controllers\Admin\RequestItemController@updateApprove')->name('requestItem.updateApprove');
	Route::get('/requestItem/{id}/edit','\App\Http\Controllers\Admin\RequestItemController@edit')->name('requestItem.edit');
	Route::get('/requestItem/{id}/destroy','\App\Http\Controllers\Admin\RequestItemController@destroy')->name('requestItem.destroy');
	Route::resource('requestItem','\App\Http\Controllers\Admin\RequestItemController',['except'=>['index','destroy','edit']]);
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
