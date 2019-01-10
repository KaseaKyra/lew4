<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/choose'], function (Router $router) {
    $router->bind('choose', function ($id) {
        return app('Modules\Choose\Repositories\ChooseRepository')->find($id);
    });
    $router->get('chooses', [
        'as' => 'admin.choose.choose.index',
        'uses' => 'ChooseController@index',
        'middleware' => 'can:choose.chooses.index'
    ]);
    $router->get('chooses/create', [
        'as' => 'admin.choose.choose.create',
        'uses' => 'ChooseController@create',
        'middleware' => 'can:choose.chooses.create'
    ]);
    $router->post('chooses', [
        'as' => 'admin.choose.choose.store',
        'uses' => 'ChooseController@store',
        'middleware' => 'can:choose.chooses.create'
    ]);
    $router->get('chooses/{choose}/edit', [
        'as' => 'admin.choose.choose.edit',
        'uses' => 'ChooseController@edit',
        'middleware' => 'can:choose.chooses.edit'
    ]);
    $router->put('chooses/{choose}', [
        'as' => 'admin.choose.choose.update',
        'uses' => 'ChooseController@update',
        'middleware' => 'can:choose.chooses.edit'
    ]);
    $router->delete('chooses/{choose}', [
        'as' => 'admin.choose.choose.destroy',
        'uses' => 'ChooseController@destroy',
        'middleware' => 'can:choose.chooses.destroy'
    ]);
// append

});
