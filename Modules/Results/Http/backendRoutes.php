<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/results'], function (Router $router) {
    $router->bind('result', function ($id) {
        return app('Modules\Results\Repositories\ResultRepository')->find($id);
    });
    $router->get('results', [
        'as' => 'admin.results.result.index',
        'uses' => 'ResultController@index',
        'middleware' => 'can:results.results.index'
    ]);
    $router->get('results/create', [
        'as' => 'admin.results.result.create',
        'uses' => 'ResultController@create',
        'middleware' => 'can:results.results.create'
    ]);
    $router->post('results', [
        'as' => 'admin.results.result.store',
        'uses' => 'ResultController@store',
        'middleware' => 'can:results.results.create'
    ]);
    $router->get('results/{result}/edit', [
        'as' => 'admin.results.result.edit',
        'uses' => 'ResultController@edit',
        'middleware' => 'can:results.results.edit'
    ]);
    $router->put('results/{result}', [
        'as' => 'admin.results.result.update',
        'uses' => 'ResultController@update',
        'middleware' => 'can:results.results.edit'
    ]);
    $router->delete('results/{result}', [
        'as' => 'admin.results.result.destroy',
        'uses' => 'ResultController@destroy',
        'middleware' => 'can:results.results.destroy'
    ]);
// append

});
