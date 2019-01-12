<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/inputs'], function (Router $router) {
    $router->bind('input', function ($id) {
        return app('Modules\Inputs\Repositories\InputRepository')->find($id);
    });
    $router->get('inputs', [
        'as' => 'admin.inputs.input.index',
        'uses' => 'InputController@index',
        'middleware' => 'can:inputs.inputs.index'
    ]);
    $router->get('inputs/create', [
        'as' => 'admin.inputs.input.create',
        'uses' => 'InputController@create',
        'middleware' => 'can:inputs.inputs.create'
    ]);
    $router->post('inputs', [
        'as' => 'admin.inputs.input.store',
        'uses' => 'InputController@store',
        'middleware' => 'can:inputs.inputs.create'
    ]);
    $router->get('inputs/{input}/edit', [
        'as' => 'admin.inputs.input.edit',
        'uses' => 'InputController@edit',
        'middleware' => 'can:inputs.inputs.edit'
    ]);
    $router->put('inputs/{input}', [
        'as' => 'admin.inputs.input.update',
        'uses' => 'InputController@update',
        'middleware' => 'can:inputs.inputs.edit'
    ]);
    $router->delete('inputs/{input}', [
        'as' => 'admin.inputs.input.destroy',
        'uses' => 'InputController@destroy',
        'middleware' => 'can:inputs.inputs.destroy'
    ]);
// append

});
