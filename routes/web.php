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
use App\Reservations;
use Illuminate\Support\Facades\DB;
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::post('/new-reservation', 'ReserveController@store');
Route::get('destroy/{id}', function($id) {
	Reservations::where('id', $id)->delete();
	$count = Reservations::where('id', '>', 0)->count();
	$all = Reservations::all();
    $checkouts = Reservations::where('checkout', 'BETWEEN CURDATE() - INTERVAL 1 DAY AND CURDATE()')->get();
	$array = ([
	    $count,
	    $all,
	    $checkouts
	]);

	return redirect('home');
});
