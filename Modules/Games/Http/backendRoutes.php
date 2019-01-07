<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/games'], function (Router $router) {
    $router->bind('game', function ($id) {
        return app('Modules\Games\Repositories\GameRepository')->find($id);
    });
    $router->get('games', [
        'as' => 'admin.games.game.index',
        'uses' => 'GameController@index',
        'middleware' => 'can:games.games.index'
    ]);
    $router->get('games/create', [
        'as' => 'admin.games.game.create',
        'uses' => 'GameController@create',
        'middleware' => 'can:games.games.create'
    ]);
    $router->post('games', [
        'as' => 'admin.games.game.store',
        'uses' => 'GameController@store',
        'middleware' => 'can:games.games.create'
    ]);
    $router->get('games/{game}/edit', [
        'as' => 'admin.games.game.edit',
        'uses' => 'GameController@edit',
        'middleware' => 'can:games.games.edit'
    ]);
    $router->put('games/{game}', [
        'as' => 'admin.games.game.update',
        'uses' => 'GameController@update',
        'middleware' => 'can:games.games.edit'
    ]);
    $router->delete('games/{game}', [
        'as' => 'admin.games.game.destroy',
        'uses' => 'GameController@destroy',
        'middleware' => 'can:games.games.destroy'
    ]);
// append

});
