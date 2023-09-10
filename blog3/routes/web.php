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

//Read data
// $router->get('/select', 'Student_Details_Controller@selectAll');
$router->get('/select', ['middleware' => 'auth', 'uses'=>'Student_Details_Controller@selectAll']);

$router->post('/select', 'Student_Details_Controller@selectByID');
$router->post('/select/{id}', 'Student_Details_Controller@selectByIDBySlug');

//Insert Data
$router->post('/select', 'Student_Details_Controller@insertData');

//Delete Data
$router->delete('/select','Student_Details_Controller@deleteData');
$router->delete('/select/{id}','Student_Details_Controller@deleteBySlug');

//Update Data
$router->post('/update','Student_Details_Controller@updateData');
$router->post('/update/{id}','Student_Details_Controller@updateDataBySlug');


//User registration
$router->post('/registration','Student_registration_controller@onRegister');
$router->post('/login', 'Login_Controller@onLogin');
