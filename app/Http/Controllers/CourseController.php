<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function course_welding(){
        return view('pages.course_welding');
    }
}
