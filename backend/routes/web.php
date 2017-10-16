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

Route::get('index',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);

Route::get('loai-san-pham/{type}',[
	'as'=>'loaisanpham',
	'uses'=>'PageController@getLoaiSp'
]);

Route::get('chi-tiet-san-pham/{id}',[
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getChitiet'
]);

Route::get('lien-he',[
	'as'=>'lienhe',
	'uses'=>'PageController@getLienHe'
]);

Route::get('gioi-thieu',[
	'as'=>'gioithieu',
	'uses'=>'PageController@getGioiThieu'
]);

Route::get('add-to-cart/{id}',[
	'as'=>'themgiohang',
	'uses'=>'PageController@getAddtoCart'
]);

Route::get('del-cart/{id}',[
	'as'=>'xoagiohang',
	'uses'=>'PageController@getDelItemCart'
]);
Route::get('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@getCheckout'
]);

Route::post('dat-hang',[
	'as'=>'dathang',
	'uses'=>'PageController@postCheckout'
]);

Route::get('dang-nhap',[
	'as'=>'login',
	'uses'=>'PageController@getLogin'
]);
Route::post('dang-nhap',[
	'as'=>'login',
	'uses'=>'PageController@postLogin'
]);

Route::get('dang-ki',[
	'as'=>'signin',
	'uses'=>'PageController@getSignin'
]);

Route::post('dang-ki',[
	'as'=>'signin',
	'uses'=>'PageController@postSignin'
]);

Route::get('dang-xuat',[
	'as'=>'logout',
	'uses'=>'PageController@postLogout'
]);


Route::group([
    'prefix' => 'admin',
    'as' => 'admin.', 
    'namespace' => 'Admin',
    //'middleware' => 'auth'
], function () {
    
    Route::get('index','PageController@getIndex')->name('index');
	
	Route::get('get-form-category','CategoryController@getFormCategory')->name('category');

	Route::post('post-category','CategoryController@postCategory')->name('post-category');

	Route::get('list-category','CategoryController@listCategory')->name('list-category');
	
	Route::get('edit-category/{id}','CategoryController@editCategory')->name('edit-category');

	Route::post('post-edit-category/{id}','CategoryController@postEditCategory')->name('post-edit-category');

	Route::get('delete-category/{id}','CategoryController@deleteCategory')->name('delete-category');


	Route::get('add-product','ProductController@getFormProduct')->name('add-product');

	Route::post('post-add-product','ProductController@postProduct')->name('post-add-product');

	Route::get('list-product','ProductController@listProduct')->name('list-product');

	Route::get('get-edit-product/{id}','ProductController@getFormEditProduct')->name('edit-product');

	Route::post('post-edit-product/{id}','ProductController@postEditProduct')->name('post-edit-product');

	Route::get('delete-product/{id}','ProductController@deleteProduct')->name('delete-product');

	Route::get('add-slide','SlideController@getFormSlide')->name('add-slide');

	Route::post('post-slide','SlideController@postSlide')->name('post-slide');

	Route::get('list-slide','SlideController@listSlide')->name('list-slide');

	Route::get('delete-slide/{id}','SlideController@deleteSlide')->name('delete-slide');

	Route::get('get-edit-slide/{id}','SlideController@getEditSlide')->name('get-edit-slide');

	Route::post('post-edit-slide/{id}','SlideController@postEditSlide')->name('post-edit-slide');
	Route::get('search','SlideController@getSearch')->name('search');

});


