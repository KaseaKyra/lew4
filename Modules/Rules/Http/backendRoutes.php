<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/rules'], function (Router $router) {
    $router->bind('rule', function ($id) {
        return app('Modules\Rules\Repositories\RuleRepository')->find($id);
    });
    $router->get('rules', [
        'as' => 'admin.rules.rule.index',
        'uses' => 'RuleController@index',
        'middleware' => 'can:rules.rules.index'
    ]);
    $router->get('rules/create', [
        'as' => 'admin.rules.rule.create',
        'uses' => 'RuleController@create',
        'middleware' => 'can:rules.rules.create'
    ]);
    $router->post('rules', [
        'as' => 'admin.rules.rule.store',
        'uses' => 'RuleController@store',
        'middleware' => 'can:rules.rules.create'
    ]);
    $router->get('rules/{rule}/edit', [
        'as' => 'admin.rules.rule.edit',
        'uses' => 'RuleController@edit',
        'middleware' => 'can:rules.rules.edit'
    ]);
    $router->put('rules/{rule}', [
        'as' => 'admin.rules.rule.update',
        'uses' => 'RuleController@update',
        'middleware' => 'can:rules.rules.edit'
    ]);
    $router->delete('rules/{rule}', [
        'as' => 'admin.rules.rule.destroy',
        'uses' => 'RuleController@destroy',
        'middleware' => 'can:rules.rules.destroy'
    ]);
// append

});
