<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/stories'], function (Router $router) {
    $router->bind('story', function ($id) {
        return app('Modules\Stories\Repositories\StoryRepository')->find($id);
    });
    $router->get('stories', [
        'as' => 'admin.stories.story.index',
        'uses' => 'StoryController@index',
        'middleware' => 'can:stories.stories.index'
    ]);
    $router->get('stories/create', [
        'as' => 'admin.stories.story.create',
        'uses' => 'StoryController@create',
        'middleware' => 'can:stories.stories.create'
    ]);
    $router->post('stories', [
        'as' => 'admin.stories.story.store',
        'uses' => 'StoryController@store',
        'middleware' => 'can:stories.stories.create'
    ]);
    $router->get('stories/{story}/edit', [
        'as' => 'admin.stories.story.edit',
        'uses' => 'StoryController@edit',
        'middleware' => 'can:stories.stories.edit'
    ]);
    $router->put('stories/{story}', [
        'as' => 'admin.stories.story.update',
        'uses' => 'StoryController@update',
        'middleware' => 'can:stories.stories.edit'
    ]);
    $router->delete('stories/{story}', [
        'as' => 'admin.stories.story.destroy',
        'uses' => 'StoryController@destroy',
        'middleware' => 'can:stories.stories.destroy'
    ]);
// append

});
