<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get("hello/{vari}/{baro}",function()
	{
		return "i'm bi ";
	});

Route::get("bi/{vari?}",function($vari = "DefaultHiihiii")
	{
		return "$vari"."kakakaa";
	});

Route::get('testcontroller','WelcomeController@checkcontroller');

Route::get('thong-tin',function(){
	$hoten='VHQ';
	$bonus='oakk';

	return view('thongtin',compact('oak','bonus'));
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('x', function () {
	echo"Văn Hồng Quân";
});

Route::get('thongtin','WelcomeController@showinfo');

Route::group(['prefix'=>'thuc-don'],function(){
	Route::get('bun-bo', function () {
	echo"Đây là bún bò";
	});
	Route::get('bun-rieu', function () {
	echo"Đây là bún riêu";
	});
	
});


Route::get('test', function()
{
	return view('admin.cate.add',compact('anything'));
});
Route::get('blade', function()
{
	return view('admin.master',compact('anything'));
}
	);
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'cate'],function(){
		Route::get('add',['as'=>'admin.cate.getAdd','user'=>'CateController@getAdd']);
	});
});