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



Auth::routes();

Route::get("/", "HomeController@home");

Route::get("/posts", "PostsController@all");

Route::get("/users", "UsersController@all");

Route::get("/categories", "CategoriesController@all");

Route::get("/user/{id}", "UsersController@detail");

Route::get("/post/{id}", "PostsController@detail");

Route::get("/search", "UsersController@search");

Route::get("/posts/add", "PostsController@add")->middleware("auth");

Route::post("/posts/add", "PostsController@store")->middleware("auth");

Route::post("/posts/delete", "PostsController@delete")->middleware("auth");

// Ruta Dashboard
Route::get('admin/dashboard', 'Dashboard@index')->name('admin/dashboard');

// Rutas CRUD
/* Crear */
Route::get('admin/users/crear', 'AdminController@crear')->name('admin/users/crear');
Route::put('admin/jugos/store', 'AdminController@store')->name('admin/users/store');

/* Leer */
Route::get('admin/users', 'AdminController@index')->name('admin/users');

/* Actualizar */
Route::get('admin/users/actualizar/{id}', 'AdminController@actualizar')->name('admin/users/actualizar');
Route::put('admin/users/update/{id}', 'AdminController@update')->name('admin/users/update');

/* Eliminar */
Route::put('admin/users/eliminar/{id}', 'AdminController@eliminar')->name('admin/users/eliminar');







