<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/listening'], function (Router $router) {
    $router->bind('listening', function ($id) {
        return app('Modules\Listening\Repositories\ListeningRepository')->find($id);
    });
    $router->get('listenings', [
        'as' => 'admin.listening.listening.index',
        'uses' => 'ListeningController@index',
        'middleware' => 'can:listening.listenings.index'
    ]);
    $router->get('listenings/create', [
        'as' => 'admin.listening.listening.create',
        'uses' => 'ListeningController@create',
        'middleware' => 'can:listening.listenings.create'
    ]);
    $router->post('listenings', [
        'as' => 'admin.listening.listening.store',
        'uses' => 'ListeningController@store',
        'middleware' => 'can:listening.listenings.create'
    ]);
    $router->get('listenings/{listening}/edit', [
        'as' => 'admin.listening.listening.edit',
        'uses' => 'ListeningController@edit',
        'middleware' => 'can:listening.listenings.edit'
    ]);
    $router->put('listenings/{listening}', [
        'as' => 'admin.listening.listening.update',
        'uses' => 'ListeningController@update',
        'middleware' => 'can:listening.listenings.edit'
    ]);
    $router->delete('listenings/{listening}', [
        'as' => 'admin.listening.listening.destroy',
        'uses' => 'ListeningController@destroy',
        'middleware' => 'can:listening.listenings.destroy'
    ]);
// append

});
