<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/songquestions'], function (Router $router) {
    $router->bind('question', function ($id) {
        return app('Modules\Songquestions\Repositories\QuestionRepository')->find($id);
    });
    $router->get('questions', [
        'as' => 'admin.songquestions.question.index',
        'uses' => 'QuestionController@index',
        'middleware' => 'can:songquestions.questions.index'
    ]);
    $router->get('questions/create', [
        'as' => 'admin.songquestions.question.create',
        'uses' => 'QuestionController@create',
        'middleware' => 'can:songquestions.questions.create'
    ]);
    $router->post('questions', [
        'as' => 'admin.songquestions.question.store',
        'uses' => 'QuestionController@store',
        'middleware' => 'can:songquestions.questions.create'
    ]);
    $router->get('questions/{question}/edit', [
        'as' => 'admin.songquestions.question.edit',
        'uses' => 'QuestionController@edit',
        'middleware' => 'can:songquestions.questions.edit'
    ]);
    $router->put('questions/{question}', [
        'as' => 'admin.songquestions.question.update',
        'uses' => 'QuestionController@update',
        'middleware' => 'can:songquestions.questions.edit'
    ]);
    $router->delete('questions/{question}', [
        'as' => 'admin.songquestions.question.destroy',
        'uses' => 'QuestionController@destroy',
        'middleware' => 'can:songquestions.questions.destroy'
    ]);
// append

});
