<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/orderings'], function (Router $router) {
    $router->bind('ordering', function ($id) {
        return app('Modules\Orderings\Repositories\OrderingRepository')->find($id);
    });
    $router->get('orderings', [
        'as' => 'admin.orderings.ordering.index',
        'uses' => 'OrderingController@index',
        'middleware' => 'can:orderings.orderings.index'
    ]);
    $router->get('orderings/create', [
        'as' => 'admin.orderings.ordering.create',
        'uses' => 'OrderingController@create',
        'middleware' => 'can:orderings.orderings.create'
    ]);
    $router->post('orderings', [
        'as' => 'admin.orderings.ordering.store',
        'uses' => 'OrderingController@store',
        'middleware' => 'can:orderings.orderings.create'
    ]);
    $router->get('orderings/{ordering}/edit', [
        'as' => 'admin.orderings.ordering.edit',
        'uses' => 'OrderingController@edit',
        'middleware' => 'can:orderings.orderings.edit'
    ]);
    $router->put('orderings/{ordering}', [
        'as' => 'admin.orderings.ordering.update',
        'uses' => 'OrderingController@update',
        'middleware' => 'can:orderings.orderings.edit'
    ]);
    $router->delete('orderings/{ordering}', [
        'as' => 'admin.orderings.ordering.destroy',
        'uses' => 'OrderingController@destroy',
        'middleware' => 'can:orderings.orderings.destroy'
    ]);
// append

});
