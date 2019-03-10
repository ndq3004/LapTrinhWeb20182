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
Route::get('quan', function () {
	$josnArr = array(
		array("quan" => "quan"),
		array("quan" => "quan"),
		array("quan" => "quan"),
		array("quan" => "quan"),
		array("quan" => "quan")
	);
	return json_encode($josnArr);
});
Route::get('db', function () {
	$dbQ = DB::table("users") -> get();
	return json_encode($dbQ);
});