<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/frontend'], function (Router $router) {
    $router->bind('frontend', function ($id) {
        return app('Modules\Frontend\Repositories\FrontendRepository')->find($id);
    });
    $router->get('frontends', [
        'as' => 'admin.frontend.frontend.index',
        'uses' => 'FrontendController@index',
        'middleware' => 'can:frontend.frontends.index'
    ]);
    $router->get('frontends/create', [
        'as' => 'admin.frontend.frontend.create',
        'uses' => 'FrontendController@create',
        'middleware' => 'can:frontend.frontends.create'
    ]);
    $router->post('frontends', [
        'as' => 'admin.frontend.frontend.store',
        'uses' => 'FrontendController@store',
        'middleware' => 'can:frontend.frontends.create'
    ]);
    $router->get('frontends/{frontend}/edit', [
        'as' => 'admin.frontend.frontend.edit',
        'uses' => 'FrontendController@edit',
        'middleware' => 'can:frontend.frontends.edit'
    ]);
    $router->put('frontends/{frontend}', [
        'as' => 'admin.frontend.frontend.update',
        'uses' => 'FrontendController@update',
        'middleware' => 'can:frontend.frontends.edit'
    ]);
    $router->delete('frontends/{frontend}', [
        'as' => 'admin.frontend.frontend.destroy',
        'uses' => 'FrontendController@destroy',
        'middleware' => 'can:frontend.frontends.destroy'
    ]);
// append

});
