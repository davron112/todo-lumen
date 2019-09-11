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

$router->group([
    'prefix'    => 'api/v1',
    'as'        => 'api.',
    'namespace' => 'Api\\v1',
], function () use ($router) {

    $router->get('families', [
        'as'   => 'families.index',
        'uses' => 'FamilyController@index',
    ]);
});
