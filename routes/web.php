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

Route::get('/', 'IndexController@index');

Route::get('/blog', 'IndexController@blog');
Route::get('/blog/{slug}', 'IndexController@show');

Route::post('/blog/{slug}/comment', 'IndexController@comment')->name('post.comment');
Route::get('/blog/category/{slug}', 'IndexController@blogCategory');
Route::get('/search', 'IndexController@blogSearch');

// Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
// Password Reset Routes...
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/users', 'UsersController', ['as' => 'admin']);
Route::resource('/admin/categories', 'CategoriesController', ['as' => 'admin']);
Route::resource('/admin/posts', 'PostsController', ['as' => 'admin']);
Route::resource('/admin/comments', 'CommentsController', ['as' => 'admin', 'except' => ['create', 'store']]);

Route::get('/admin/settings', 'SettingsController@index')->name('admin.settings.index');
Route::post('/admin/settings', 'SettingsController@store')->name('admin.settings.store');

Route::get('/api/datatable/users', 'UsersController@dataTable')->name('api.datatable.users');
Route::get('/api/datatable/categories', 'CategoriesController@dataTable')->name('api.datatable.categories');
Route::get('/api/datatable/posts', 'PostsController@dataTable')->name('api.datatable.posts');
Route::get('/api/datatable/comments', 'CommentsController@dataTable')->name('api.datatable.comments');
