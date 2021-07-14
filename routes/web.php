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
Route::get('/course_food', 'CourseController@course_food') -> name('food');
Route::get('/course_dressmaking', 'CourseController@course_dressmaking') -> name('dressmaking');
Route::get('/course_tailoring', 'CourseController@course_tailoring') -> name('tailoring');
Route::get('/course_dishwashing', 'CourseController@course_dishwashing') -> name('dishwashing');


//GALLERY
Route::get('/skills_gallery_photo', 'GalleryController@skills_gallery_photo') -> name('gallery_photo');