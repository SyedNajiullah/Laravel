<?php

use Illuminate\Support\Facades\Route;

// By default code
Route::get('/', function () {
    //dispatch(new App\Jobs\prevent_sleeping(123));
    return view('welcome');
});

// All my code

// // required parameter
// Route::get('/ID/{id_variable}', function($id_variable){
//     echo 'id is :' . $id_variable;
// });

// // more them one reqired parameter
// Route::get('name/{name}/rollNumber/{roll_number}', function($name, $roll_number){
//     echo "NAME : " . $name . ", Roll Number : " . $roll_number;
// });

// // optional parameter
// Route::get('name/{optional_name?}', function($optional_name = 'point'){
//     echo 'Optional name is ' . $optional_name;
// });

// // multiple parameters but with one optional parameter
// Route::get('name/{name}/rollNumber/{roll_number}/section/{section?}', function($name, $roll_number, $section = 'A-7 I was the optional parameter'){
//     echo "NAME : " . $name . ", Roll Number : " . $roll_number . ', Section :' . $section;
// });

// // Named parameter 
// Route::get('first', function(){echo "This one has a name";})->name('one');

// // Controller
// // example number 1
// use App\Http\Controllers\name_new_controller;
// Route::get('myfirstcontroller', [name_new_controller::class, 'okay']);
// // example number 2
// use App\Http\Controllers\exampleController;
// Route::get('check', [exampleController::class, 'another']);
// // example number 3
// use App\Http\Controllers\testing_new;
// Route::get('hello_naji', [testing_new::class, 'another_testing']);
// // prefix
// Route::prefix('permanent')->group(function(){
//     Route::get('/name/{name}', function($name){
//         echo 'Name : ' . $name;
//     });
//     Route::get('/section/{section}', function($section){
//         echo "Section : " . $section;
//     });
// });
// use App\Http\Controllers\first_HTML;
// Controller Linking with HTML code
// Route::get('/registration', [first_HTML::class, 'review_HTML']);
// //post
// Route::post('/registration', [first_HTML::class, 'validate_form'])->name('register');

//Assignment2 Controller Code
use App\Http\Controllers\registration_controller;
Route::get('/registration', [registration_controller::class, 'view_form']);

Route::post('/registration', [registration_controller::class, 'validation'])->name('register');