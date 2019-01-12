<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/sortings'], function (Router $router) {
    $router->bind('sorting', function ($id) {
        return app('Modules\Sortings\Repositories\SortingRepository')->find($id);
    });
    $router->get('sortings', [
        'as' => 'admin.sortings.sorting.index',
        'uses' => 'SortingController@index',
        'middleware' => 'can:sortings.sortings.index'
    ]);
    $router->get('sortings/create', [
        'as' => 'admin.sortings.sorting.create',
        'uses' => 'SortingController@create',
        'middleware' => 'can:sortings.sortings.create'
    ]);
    $router->post('sortings', [
        'as' => 'admin.sortings.sorting.store',
        'uses' => 'SortingController@store',
        'middleware' => 'can:sortings.sortings.create'
    ]);
    $router->get('sortings/{sorting}/edit', [
        'as' => 'admin.sortings.sorting.edit',
        'uses' => 'SortingController@edit',
        'middleware' => 'can:sortings.sortings.edit'
    ]);
    $router->put('sortings/{sorting}', [
        'as' => 'admin.sortings.sorting.update',
        'uses' => 'SortingController@update',
        'middleware' => 'can:sortings.sortings.edit'
    ]);
    $router->delete('sortings/{sorting}', [
        'as' => 'admin.sortings.sorting.destroy',
        'uses' => 'SortingController@destroy',
        'middleware' => 'can:sortings.sortings.destroy'
    ]);
// append

});
