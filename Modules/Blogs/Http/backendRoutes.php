<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/blogs'], function (Router $router) {
    $router->bind('blog', function ($id) {
        return app('Modules\Blogs\Repositories\BlogRepository')->find($id);
    });
    $router->get('blogs', [
        'as' => 'admin.blogs.blog.index',
        'uses' => 'BlogController@index',
        'middleware' => 'can:blogs.blogs.index'
    ]);
    $router->get('blogs/create', [
        'as' => 'admin.blogs.blog.create',
        'uses' => 'BlogController@create',
        'middleware' => 'can:blogs.blogs.create'
    ]);
    $router->post('blogs', [
        'as' => 'admin.blogs.blog.store',
        'uses' => 'BlogController@store',
        'middleware' => 'can:blogs.blogs.create'
    ]);
    $router->get('blogs/{blog}/edit', [
        'as' => 'admin.blogs.blog.edit',
        'uses' => 'BlogController@edit',
        'middleware' => 'can:blogs.blogs.edit'
    ]);
    $router->put('blogs/{blog}', [
        'as' => 'admin.blogs.blog.update',
        'uses' => 'BlogController@update',
        'middleware' => 'can:blogs.blogs.edit'
    ]);
    $router->delete('blogs/{blog}', [
        'as' => 'admin.blogs.blog.destroy',
        'uses' => 'BlogController@destroy',
        'middleware' => 'can:blogs.blogs.destroy'
    ]);
// append

});
