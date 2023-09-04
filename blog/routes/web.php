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


//Basic Routing API
/*

$router->get('/get', function () use ($router) {
    return "I from get method";
});

$router->post('/post', function () use ($router) {
    return "I from post method";
});

$router->put('/put', function () use ($router) {
    return "I from put method";
});

$router->delete('/delete', function () use ($router) {
    return "I from delete method";
});


$router->post('/jewel', function(){
    return "I am Jewel Rana. A novice PHP programmer";
});

*/


//Basic parameter

//Required parameter
$router ->post('/name/{value}',function($value){
            return $value;
});

//Optional parameter
$router -> post('/{name}/{age}[/{city}]', function($name,$age,$city=null){
    return "His name is ".$name." and"." age is ".$age." City optional ".$city;
});


//Basic Controller
$router -> post('/controller','MyController@My');

//Controller with parameter
$router -> get('/controller/{myParam}','MyController@MyParam');


//Controller with response
$router -> get('/controllerResponse/{myRes}','MyController@MyResponse');

//Controller head response
$router -> get('/controllerHeadResponse/{headRes}','MyController@MyResponseHeader');

//JSON simple array
$router -> get('/jsonSimple','MyController@MyJSONSimple');

//JSON associative array
$router -> get('/jsonAss','MyController@MyJSONAssociative');


//Method redirect
$router ->get('/redirect', 'MyController@MyFirstMethod');
$router ->get('/second', 'MyController@MySecondMethod');

//Method download
$router ->get('/download', 'MyController@DownloadFile');


//Response from header method
$router ->post('/catch', 'MyController@MyCatch');