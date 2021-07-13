<?php

use Illuminate\Support\Facades\Route;

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
    return view('pages.index');
});

//COURSE
Route::get('/course_welding', 'CourseController@course_welding') -> name('welding');
Route::get('/course_baking', 'CourseController@course_baking') -> name('baking');
Route::get('/course_caregiving', 'CourseController@course_caregiving') -> name('caregiving');
Route::get('/course_electronics', 'CourseController@course_electronics') -> name('electronics');