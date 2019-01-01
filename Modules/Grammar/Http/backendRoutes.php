<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/grammar'], function (Router $router) {
    $router->bind('grammar', function ($id) {
        return app('Modules\Grammar\Repositories\GrammarRepository')->find($id);
    });
    $router->get('grammars', [
        'as' => 'admin.grammar.grammar.index',
        'uses' => 'GrammarController@index',
        'middleware' => 'can:grammar.grammars.index'
    ]);
    $router->get('grammars/create', [
        'as' => 'admin.grammar.grammar.create',
        'uses' => 'GrammarController@create',
        'middleware' => 'can:grammar.grammars.create'
    ]);
    $router->post('grammars', [
        'as' => 'admin.grammar.grammar.store',
        'uses' => 'GrammarController@store',
        'middleware' => 'can:grammar.grammars.create'
    ]);
    $router->get('grammars/{grammar}/edit', [
        'as' => 'admin.grammar.grammar.edit',
        'uses' => 'GrammarController@edit',
        'middleware' => 'can:grammar.grammars.edit'
    ]);
    $router->put('grammars/{grammar}', [
        'as' => 'admin.grammar.grammar.update',
        'uses' => 'GrammarController@update',
        'middleware' => 'can:grammar.grammars.edit'
    ]);
    $router->delete('grammars/{grammar}', [
        'as' => 'admin.grammar.grammar.destroy',
        'uses' => 'GrammarController@destroy',
        'middleware' => 'can:grammar.grammars.destroy'
    ]);
// append

});
