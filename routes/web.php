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

*Name: Johnson Opeyemi
*Date: 2020/March/09
*Time: 9:34pm
*Github: netflams10

*This is the admin Route Throughout the whole Section all Others will be added very soon
*Thanks For viewing and the upgrade....

*/

Route::get('admin/createnewsize', 'Admin\NewSizeController@create')->name('admin.create');
Route::post('admin/newsize/tyresize', 'Admin\NewSizeController@store')->name('admin.newtyresize');
Route::post('admin/newsize/companyname', 'Admin\CompanyNameController@store')->name('admin.newcompanyname');
Route::post('admin/newsize/aspectratio', 'Admin\AspectRatioController@store')->name('admin.newaspectratio');
Route::post('admin/newsize/rimsize', 'Admin\RimsizeController@store')->name('admin.newrimsize');

Route::get('admin/edit/{id}', 'Admin\ProductController@edit')->name('admin.edit');
Route::post('admin/sumitedit/{id}', 'Admin\ProductController@update')->name('admin.edited.product');
Route::delete('admin/delete/{id}', 'Admin\ProductController@destroy')->name('admin.delete');


Route::get('admin/allproduct', 'Admin\ProductController@index')->name('admin.allproduct');
Route::get('admin/create', 'Admin\ProductController@create')->name('admin.createproduct');
Route::post('admin/createproduct/submit', 'Admin\ProductController@store')->name('submit.product');


// Route::get('/admin/newsize', 'Admin\NewSizeController@index')->name('admin.newsize');



Route::get('/admin', 'Admin\DashBoardController@index')->name('admin.dashboard');