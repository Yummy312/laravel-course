<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-page', function(){
    return 'This is my page';
});

Route::get('/sum', function(Request $request){
    $data = $request -> all();

    try{
        if($data['x']  &&  $data['y'] ){
            $result = $data['x'] + $data['y'];
            return $result;
        }
    } catch(Exception $e){
            echo 'PHP перехватил исключение: ',  $e->getMessage(), "\n";
  
    }
});