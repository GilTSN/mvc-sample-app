<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/*
 * Home page (articles list)
 */
$app->get('/', 'ArticlesController@index');

/*
 * new article
 */
$app->get('articles/create', 'ArticlesController@create');

/*
 * save new article
 */
$app->post('articles', 'ArticlesController@store');
