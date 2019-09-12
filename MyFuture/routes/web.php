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





