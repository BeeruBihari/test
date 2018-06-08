<?php
/*
|--------------------------------------------------------------------------
| Including web Routes
|--------------------------------------------------------------------------
|
| Here is the list of all route that are required to start the app. If the
| any of the given route is missing apllication will not run until route
| is put into the "routes" directory.
|
*/


include_once(__DIR__."/AccessLevel.php");

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

Route::get('/lib','library_management\general_management@show');
Route::get('profile',function(){
	return view('MainTheme.profile');
});

Route::get('Main',function(){
	return view('MainTheme.Main');
});