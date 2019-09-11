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

Route::get('/', [
    'uses' =>'LaravelProjectController@home',
    'as'   =>'/'
]);
Route::get('/category-pages/{id}', [
    'uses' =>'LaravelProjectController@categoryPages',
    'as'   =>'category-pages'
]);

Route::get('/blog-details/{id}', [
    'uses' =>'LaravelProjectController@blogDetails',
    'as'   =>'blog-details'
]);




Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');



Route::get('/home', [
    'uses' => 'HomeController@index',
    'as'   => 'home'
]);

Route::get('/category/add-category',[
   'uses' => 'CategoryController@addCategory',
   'as'   => 'add-category'
]);

Route::post('/category/new-category',[
   'uses' => 'CategoryController@newCategory',
    'as'  => 'new-category'
]);

Route::get('/category/manage-category',[
    'uses' => 'CategoryController@manageCategory',
    'as'   => 'manage-category'
]);

Route::get('/category/edit-category/{id}',[
    'uses' => 'CategoryController@editCategory',
    'as'   => 'edit-category'
]);
Route::post('/category/update-category',[
    'uses' => 'CategoryController@updateCategory',
    'as'   => 'update-category'
]);

Route::post('/category/delete-category',[
    'uses' => 'CategoryController@deleteCategory',
    'as'   => 'delete-category'
]);


//............................BLOG-PART

Route::get('/blog/add-blog',[
   'uses' => 'BlogController@addBlog',
   'as'   => 'add-blog'
]);

Route::post('/blog/new-blog',[
    'uses' => 'BlogController@newBlogAdd',
    'as'   => 'new-blog'
]);

Route::get('/blog/manage-blog',[
    'uses' => 'BlogController@managBlog',
    'as'   => 'manage-blog'
]);

Route::get('/blog/edit-blog/{id}',[
   'uses' => 'BlogController@editBlog',
   'as'   => 'edit-blog'
]);

Route::post('/blog/update-blog',[
   'uses' => 'BlogController@updateBlog',
   'as'   => 'update-blog'
]);

Route::post('/blog/delete-blog',[
    'uses' => 'BlogController@deleteBlog',
    'as'   => 'delete-blog'
]);


//...............Slider Part..................

Route::get('/slider/add-slider',[
    'uses' => 'SliderController@addSlider',
    'as'   => 'add-slider'
]);
Route::post('/slider/new-slider',[
    'uses' => 'SliderController@newSlider',
    'as'   => 'new-slider'
]);
Route::get('/slider/manage-slider',[
    'uses' => 'SliderController@manageSlider',
    'as'   => 'manage-slider'
]);
Route::get('/slider/edit-slider/{id}',[
    'uses' => 'SliderController@editSlider',
    'as'   => 'edit-slider'
]);
Route::post('/slider/update-slider',[
    'uses' => 'SliderController@updateSlider',
    'as'   => 'update-slider'
]);

Route::post('/slider/delete-slider',[
    'uses' => 'SliderController@deleteSlider',
    'as'   => 'delete-slider'
]);

//...............test data................

Route::get('/test/test-data', [
   'uses' => 'TestController@testData',
   'as'   => 'test-data'
]);

Route::post('/test/add-test', [
    'uses' => 'TestController@addTest',
    'as'   => 'add-test'
]);

Route::get('/test/show-test', [
    'uses' => 'TestController@showTest',
    'as'   => 'show-test'
]);

Route::post('/test/delete-test', [
    'uses' => 'TestController@deleteTest',
    'as'   => 'delete-test'
]);