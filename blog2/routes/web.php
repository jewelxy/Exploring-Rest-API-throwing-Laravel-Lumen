<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router -> get('/builder','BuilderController@Allrows');

//Retrive Specify Data
$router -> get('/spcifydata/{value}','BuilderController@RetriveSpecificData');

//Aggrigrate Method
$router ->get('/aggrigrate/count','BuilderController@AgregrateMethod');
$router ->get('/aggrigrate/maxCount','BuilderController@AgregrateMethod');
$router ->get('/aggrigrate/sumAvg','BuilderController@AgregrateMethod');


//CRUD By MediaQuery
$router -> get('/fetch','CrudController@fetchData');
$router -> post('/create','CrudController@InsertData');
$router -> put('/edit','CrudController@UpdateData');
$router -> delete('/delete/{id}','CrudController@DeleteData');
