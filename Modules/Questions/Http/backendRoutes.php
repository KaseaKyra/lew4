<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/questions'], function (Router $router) {
    $router->bind('question', function ($id) {
        return app('Modules\Questions\Repositories\QuestionRepository')->find($id);
    });
    $router->get('questions', [
        'as' => 'admin.questions.question.index',
        'uses' => 'QuestionController@index',
        'middleware' => 'can:questions.questions.index'
    ]);
    $router->get('questions/create', [
        'as' => 'admin.questions.question.create',
        'uses' => 'QuestionController@create',
        'middleware' => 'can:questions.questions.create'
    ]);
    $router->post('questions', [
        'as' => 'admin.questions.question.store',
        'uses' => 'QuestionController@store',
        'middleware' => 'can:questions.questions.create'
    ]);
    $router->get('questions/{question}/edit', [
        'as' => 'admin.questions.question.edit',
        'uses' => 'QuestionController@edit',
        'middleware' => 'can:questions.questions.edit'
    ]);
    $router->put('questions/{question}', [
        'as' => 'admin.questions.question.update',
        'uses' => 'QuestionController@update',
        'middleware' => 'can:questions.questions.edit'
    ]);
    $router->delete('questions/{question}', [
        'as' => 'admin.questions.question.destroy',
        'uses' => 'QuestionController@destroy',
        'middleware' => 'can:questions.questions.destroy'
    ]);
// append

});
