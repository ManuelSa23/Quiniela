<?php

Route::prefix('/admin')->group(function(){
   Route::get('/', 'App\Http\Controllers\Admin\DashboardController@getDashboard');
   Route::get('/users', 'App\Http\Controllers\Admin\UserController@getUsers');

   //Productos
   Route::get('/products', 'App\Http\Controllers\Admin\ProductController@getHome');
   Route::get('/products/add', 'App\Http\Controllers\Admin\ProductController@getProductAdd');
   Route::get('/products/{id}/edit', 'App\Http\Controllers\Admin\ProductController@getProductEdit');
   Route::post('/products/add', 'App\Http\Controllers\Admin\ProductController@postProductAdd');
   Route::post('/products/{id}/edit', 'App\Http\Controllers\Admin\ProductController@postProductEdit');


   //Categorias
   Route::get('/categories/{module}','App\Http\Controllers\Admin\CategoriesController@getHome');
   Route::post('/category/add','App\Http\Controllers\Admin\CategoriesController@postCategoryAdd');
   Route::get('/category/{id}/edit','App\Http\Controllers\Admin\CategoriesController@getCategoryEdit');
   Route::post('/category/{id}/edit','App\Http\Controllers\Admin\CategoriesController@postCategoryEdit');
   Route::get('/category/{id}/delete','App\Http\Controllers\Admin\CategoriesController@getCategoryDelete');
});
