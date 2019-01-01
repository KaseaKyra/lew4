<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/songs'], function (Router $router) {
    $router->bind('song', function ($id) {
        return app('Modules\Songs\Repositories\SongRepository')->find($id);
    });
    $router->get('songs', [
        'as' => 'admin.songs.song.index',
        'uses' => 'SongController@index',
        'middleware' => 'can:songs.songs.index'
    ]);
    $router->get('songs/create', [
        'as' => 'admin.songs.song.create',
        'uses' => 'SongController@create',
        'middleware' => 'can:songs.songs.create'
    ]);
    $router->post('songs', [
        'as' => 'admin.songs.song.store',
        'uses' => 'SongController@store',
        'middleware' => 'can:songs.songs.create'
    ]);
    $router->get('songs/{song}/edit', [
        'as' => 'admin.songs.song.edit',
        'uses' => 'SongController@edit',
        'middleware' => 'can:songs.songs.edit'
    ]);
    $router->put('songs/{song}', [
        'as' => 'admin.songs.song.update',
        'uses' => 'SongController@update',
        'middleware' => 'can:songs.songs.edit'
    ]);
    $router->delete('songs/{song}', [
        'as' => 'admin.songs.song.destroy',
        'uses' => 'SongController@destroy',
        'middleware' => 'can:songs.songs.destroy'
    ]);
// append

});
