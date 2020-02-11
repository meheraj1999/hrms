<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/minus/{a}/{b}',function($a,$b){
		echo $a-$b; })->where(['a'=>'[0-9]+','b'=>'[0-9]']);

	Route::get('/sum/{a}/{b}',function($a,$b){
		echo $a+$b;
	})->where(['a'=>'[0-9]+','b'=>'[0-9]']);
	Route::get('/divide/{a}/{b}',function($a,$b){
		echo $a/$b;
	})->where(['a'=>'[A-Z]+','b'=>'[0-9]']);
	Route::get('/into/{a}/{b}',function($a,$b){
		echo $a*$b;
	})->where(['a'=>'[0-9]+','b'=>'[0-9]']);
	Route::get('/divide/{a}/{b}',function($a,$b){
		echo $a/$b;
	})->where(['a'=>'[0-9]+','b'=>'[0-9]']);

	Route::get('/namta/{a}',function($a){
		for($b=1; $b<=10;$b++){
			echo $a*$b;
		}
	})->where(['a'=>'[0-9]+','b'=>'[0-9]']);


Route::get('/student',function(){
return view($form);   
})



@include()
{{value}}//echo korar jonno//

