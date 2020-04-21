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

// Route::get('/', function () {
//     return view('users.index');
// });

Route::get('/','userController\UserController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//slider Routes
include('sliderRoutes/sliderRoute.php');

//process workflow Routes
include('processWorkflowRoutes/processWorkflowRoutes.php');

// future and training Routes
include('futureAndTrainingRoutes/futureAndTrainingRoutes.php');

// next Training Routes
include('nextTrainingRoutes/nextTrainingRoute.php');