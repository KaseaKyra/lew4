<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/answer'], function (Router $router) {
    $router->bind('answer', function ($id) {
        return app('Modules\Answer\Repositories\AnswerRepository')->find($id);
    });
    $router->get('answers', [
        'as' => 'admin.answer.answer.index',
        'uses' => 'AnswerController@index',
        'middleware' => 'can:answer.answers.index'
    ]);
    $router->get('answers/create', [
        'as' => 'admin.answer.answer.create',
        'uses' => 'AnswerController@create',
        'middleware' => 'can:answer.answers.create'
    ]);
    $router->post('answers', [
        'as' => 'admin.answer.answer.store',
        'uses' => 'AnswerController@store',
        'middleware' => 'can:answer.answers.create'
    ]);
    $router->get('answers/{answer}/edit', [
        'as' => 'admin.answer.answer.edit',
        'uses' => 'AnswerController@edit',
        'middleware' => 'can:answer.answers.edit'
    ]);
    $router->put('answers/{answer}', [
        'as' => 'admin.answer.answer.update',
        'uses' => 'AnswerController@update',
        'middleware' => 'can:answer.answers.edit'
    ]);
    $router->delete('answers/{answer}', [
        'as' => 'admin.answer.answer.destroy',
        'uses' => 'AnswerController@destroy',
        'middleware' => 'can:answer.answers.destroy'
    ]);
// append

});
