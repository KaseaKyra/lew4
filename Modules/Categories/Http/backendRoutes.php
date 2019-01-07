<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/categories'], function (Router $router) {
    $router->bind('category', function ($id) {
        return app('Modules\Categories\Repositories\CategoryRepository')->find($id);
    });
    $router->get('categories', [
        'as' => 'admin.categories.category.index',
        'uses' => 'CategoryController@index',
        'middleware' => 'can:categories.categories.index'
    ]);
    $router->get('categories/create', [
        'as' => 'admin.categories.category.create',
        'uses' => 'CategoryController@create',
        'middleware' => 'can:categories.categories.create'
    ]);
    $router->post('categories', [
        'as' => 'admin.categories.category.store',
        'uses' => 'CategoryController@store',
        'middleware' => 'can:categories.categories.create'
    ]);
    $router->get('categories/{category}/edit', [
        'as' => 'admin.categories.category.edit',
        'uses' => 'CategoryController@edit',
        'middleware' => 'can:categories.categories.edit'
    ]);
    $router->put('categories/{category}', [
        'as' => 'admin.categories.category.update',
        'uses' => 'CategoryController@update',
        'middleware' => 'can:categories.categories.edit'
    ]);
    $router->delete('categories/{category}', [
        'as' => 'admin.categories.category.destroy',
        'uses' => 'CategoryController@destroy',
        'middleware' => 'can:categories.categories.destroy'
    ]);
// append

});
