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
$router->get('/song-list', 'frontend\\frontendController@getSongList')->name('frontend.list.song');
$router->get('/listening-list', 'frontend\\frontendController@getListeningList')->name('frontend.list.listening');
$router->get('/game', 'frontend\\frontendController@getGame')->name('frontend.game');
$router->get('/blog', 'frontend\\frontendController@getBlog')->name('frontend.blog');
$router->get('/about-us', 'frontend\\frontendController@getAboutUs')->name('frontend.about.us');
$router->get('/story-list', 'frontend\\frontendController@getStoryList')->name('frontend.list.story');
$router->get('/grammar-list', 'frontend\\frontendController@getGrammarList')->name('frontend.list.grammar');
$router->get('/song-item/{id}', 'frontend\\frontendController@getSongById')->name('frontend.item.song');
$router->get('/story-item/{id}', 'frontend\\frontendController@getStoryById')->name('frontend.item.story');
$router->get('/listening-item/{id}', 'frontend\\frontendController@getListeningById')->name('frontend.item.listening');
$router->get('/grammar-item/{id}', 'frontend\\frontendController@getGrammarById')->name('frontend.item.grammar');
//$router->get('/listening-item/{name}/{id}','frontend\\frontendController@getListeningById')->name('frontend.item
//.listening');
//$router->get('/song-list','frontend\\frontendController@loadSong')->name('frontend.load.song');
//$router->post('/login','frontend\\frontendController@login')->name('login');
$router->post('/check-song', 'frontend\\frontendController@checkSongAnswer')->name('frontend.check.song');
$router->post('/check-listening', 'frontend\\frontendController@checkListeningAnswer')->name('frontend.check.listening');
$router->post('/check-grammar', 'frontend\\frontendController@checkGrammarAnswer')->name('frontend.check.grammar');
$router->post('/check-story', 'frontend\\frontendController@checkStoryAnswer')->name('frontend.check.story');