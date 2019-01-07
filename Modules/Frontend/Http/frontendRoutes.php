<?php
/**
 * Created by PhpStorm.
 * User: Kasea
 * Date: 01/05/2019
 * Time: 12:23 PM
 */

use Illuminate\Routing\Router;

/** @var Router $router */

$router->get('/index', "frontend\\frontendController@index")->name('frontend.index');
$router->get('/song-list','frontend\\frontendController@getSongList')->name('frontend.list.song');
$router->get('/listening-list','frontend\\frontendController@getListeningList')->name('frontend.list.listening');
$router->get('/game','frontend\\frontendController@getGame')->name('frontend.game');
$router->get('/story-list','frontend\\frontendController@getStoryList')->name('frontend.list.story');
$router->get('/grammar-list','frontend\\frontendController@getGrammarList')->name('frontend.list.grammar');
$router->get('/song-item/{id}','frontend\\frontendController@getSongById')->name('frontend.item.song');
//$router->post('/login','frontend\\frontendController@login')->name('login');
////$router->post('/check-Song','frontend\\frontendController@checkSong')->name('submitLyric');