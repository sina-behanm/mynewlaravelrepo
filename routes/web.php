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

Route::get('/', 'PostController@getIndex')->name('blog.index');

Route::get('/AccessDenied',function (){
    return view('blog.AccessDenied');
})->name('blog.Denied');

Route::get('post/{id}','PostController@getPost')->name('blog.post');
Route::get('post/{id}/like','PostController@getLikePost')->name('blog.post.like');
Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::group(['prefix' => 'admin','middleware' => ['auth']], function() {
    Route::get('','PostController@getAdminIndex')->name('admin.index');

    Route::get('create','PostController@getAdminCreate')->name('admin.create');

    Route::post('create','PostController@postAdminCreate')->name('admin.create');

    Route::get('edit/{id}','PostController@getAdminEdit')->name('admin.edit');
    Route::get('delete/{id}','PostController@getAdminDelete')->name('admin.delete');

    Route::post('edit','PostController@postAdminEdit')->name('admin.update');

});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::post('login','SigninController@sign_in')->name('auth.signin');
