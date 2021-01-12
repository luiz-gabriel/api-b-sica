<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\UserController;

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

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    // $api->get('/', function () use ($api) {
    //     return $api->version;
    // });
    
    $api->get('/user/{id}', [UserController::class,'viewUser']);
    
    $api->get('/users', [UserController::class,'viewUsers']);

    $api->put('/update/user/{id}',[UserController::class,'updateUser']);
    
    $api->post('/create/user', [UserController::class,'createUser']);

    $api->post('/delete/user/{id}',[UserController::class,'deleteUser']);
});
// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

// $router->get('/user/{id}', 'App\Http\Controllers\UserController@viewUser');

// $router->get('/users', 'UserController@viewUsers');

// $router->post('/create/user', 'UserController@createUser');