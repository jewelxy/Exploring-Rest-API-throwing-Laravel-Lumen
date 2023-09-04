# Lumen PHP Framework

>**Basic Routing API**
```
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
```

>**Basic parameter**
```
//Required parameter
$router ->post('/name/{value}',function($value){
            return $value;
});

//Optional parameter
$router -> post('/{name}/{age}[/{city}]', function($name,$age,$city=null){
    return "His name is ".$name." and"." age is ".$age." City optional ".$city;
});
```

>**Controller**
```
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
```

>**Controller file(17)**
```
<?php
namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class MyController extends Controller{

    public function My(){
        return "Controller function is working";
    }

    //Controller function with parameter

    public function MyParam($myParam){
        return "Controller with Parameter ".$myParam;
    }


    //Controller funtion response in body
    public function MyResponse($myRes){
        return response($myRes);
    }


    //Controller function response in header

    public function MyResponseHeader($headRes){
        return response($headRes)
                ->header('name',$headRes)
                ->header('age','28')
                ->header('city', 'Bogura');
    }


    //JSON data throwing simple array

    public function MyJSONSimple(){
            $simpleArray = array('Computer','Ram','Rom');
            return response()->json($simpleArray);
    }


    //JSON data throwing associative array

    public function MyJSONAssociative(){
        $assArray = array(
            'name' => 'Toha',
            'Age' => '2',
            'Father' => 'Jewel Rana'
        );

        return response()->json($assArray);
    }



    //Method Redirect

    public function MyFirstMethod(){
        return redirect('/second');
    }

    public function MySecondMethod(){
        return 'I am learning API method redirecting';
    }


    //Response download
    public function DownloadFile(){
        $path = 'demo.txt';
        return response()->download($path);
    }
}  
```