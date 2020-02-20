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

Route::get('/','HomeController@index')->name('homepage');

Route::auth();

Auth::routes();

route::get('/register/verification','Auth\RegisterController@verification')->name('verification');

route::post('/register/verification/check/','Auth\RegisterController@verificationCheck')->name('verification.check');

Route::post('/password/cellphone','Auth\ForgotPasswordController@cellphone')->name('password.cellphone');

Route::get('/panel', 'UserController@panel') -> name('panel');

/*Route::resource('/profile','UserController',['except' => ['show','create','store']]);*/
Route::get('/profile','UserController@show')->name('profile.show');

Route::get('/profile/games','UserController@games')->name('profile.games');

Route::get('/profile/edit','UserController@edit')->name('profile.edit');

Route::put('/profile','UserController@update')->name('profile.update');

Route::delete('/profile','UserController@destroy')->name('profile.destroy');

Route::get('/dashboard','HomeController@dashboard') -> middleware(['checkAdmin','ActiveUser','auth']) -> name('dashboard');

Route::get('/dashboard/users/trash','AdminUsersController@trash')->middleware('checkAdmin')-> name('users.trash');

Route::resource('/dashboard/users','AdminUsersController') -> middleware('checkAdmin');

Route::get('/dashboard/users/{user}/game','AdminUsersController@games')->middleware('checkAdmin')->name('users.games');

Route::get('/dashboard/users/{id}/game/add','AdminUsersController@showgames')->middleware('checkAdmin')->name('users.showgames');

Route::post('/dashboard/users/{user}/game/add','AdminUsersController@addgame')->middleware('checkAdmin')->name('users.addgame');

Route::put('/dashboard/users/{id}/moveToTrash','AdminUsersController@moveToTrash')->middleware('checkAdmin')-> name('users.moveToTrash');

Route::put('/dashboard/users/{id}/replaceFromTrash','AdminUsersController@replaceFromTrash')->middleware('checkAdmin')-> name('users.replaceFromTrash');

/*Route::resource('/games','GameController',['except' => ['create','store','edit','update','destroy']]);*/
Route::get('/games','GameController@index')->name('games.index');

Route::get('/games/{game}','GameController@show')->name('games.show');

route::post('/games/{id}/comments','GameController@storeComment')->name('storeComment');

route::get('/game/{name}','GameController@start')->name('startGame');

route::resource('dashboard/comments','adminCommentsController',['except' => ['create','store','edit','update']])->middleware('checkAdmin');

Route::get('/dashboard/sentComments','adminCommentsController@sent')->middleware('checkAdmin')-> name('comments.sent');

Route::put('/dashboard/comments/{id}/sendComment','AdminCommentsController@send')->middleware('checkAdmin')-> name('comments.send');

Route::put('/dashboard/comments/{id}/unsendComment','AdminCommentsController@unsend')->middleware('checkAdmin')-> name('comments.unsend');

