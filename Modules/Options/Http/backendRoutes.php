<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/options'], function (Router $router) {
    $router->bind('option', function ($id) {
        return app('Modules\Options\Repositories\OptionRepository')->find($id);
    });
    $router->get('options', [
        'as' => 'admin.options.option.index',
        'uses' => 'OptionController@index',
        'middleware' => 'can:options.options.index'
    ]);
    $router->get('options/create', [
        'as' => 'admin.options.option.create',
        'uses' => 'OptionController@create',
        'middleware' => 'can:options.options.create'
    ]);
    $router->post('options', [
        'as' => 'admin.options.option.store',
        'uses' => 'OptionController@store',
        'middleware' => 'can:options.options.create'
    ]);
    $router->get('options/{option}/edit', [
        'as' => 'admin.options.option.edit',
        'uses' => 'OptionController@edit',
        'middleware' => 'can:options.options.edit'
    ]);
    $router->put('options/{option}', [
        'as' => 'admin.options.option.update',
        'uses' => 'OptionController@update',
        'middleware' => 'can:options.options.edit'
    ]);
    $router->delete('options/{option}', [
        'as' => 'admin.options.option.destroy',
        'uses' => 'OptionController@destroy',
        'middleware' => 'can:options.options.destroy'
    ]);
// append

});
