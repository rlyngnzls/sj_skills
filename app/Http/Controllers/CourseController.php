<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function course_welding(){
        return view('pages.course_welding');
    }

    public function course_baking(){
        return view('pages.course_baking');
    }

    public function course_caregiving(){
        return view('pages.course_caregiving');
    }

    public function course_electronics(){
        return view('pages.course_electronics');
    }
}
