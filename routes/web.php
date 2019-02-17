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
    return view('home');
});
Route::get('/home2', function () {
    return view('home2');
});
Route::get('/portofolio', function () {
    return view('portofolio');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/artikel/filter/{id}', function($id) {
    $artikels = DB::table('artikels')->where('category', $id)->get();
    return view('category', ['artikels'=>$artikels]);
});



Route::get('/artikel/editmember/{id}', function($id) {
    $users = DB::table('users')->where('id', $id)->get();
    return view('editmembership', ['users'=>$users]);
});

Route::get('/artikel/editmember_aksi/{id}', function($id) {
    $users = DB::update('UPDATE `users` SET `email_verified_at` = NULL, `membership_id` = 1 WHERE `users`.`id` = 1');
    return view('artikel', ['users'=>$users]);
});

Route::get('/artikel', function (){
    $artikels = DB::table('artikels')->get();
    $categories = DB::table('categories')->get();
    $memberships = DB::select('SELECT type FROM users,memberships WHERE users.membership_id = memberships.id');

    return View::make('artikel')
        ->with('artikels', $artikels)
        ->with('categories', $categories)
        ->with('memberships', $memberships);
});

Route::resource('artikels','artikelController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');