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

    public function course_food(){
        return view('pages.course_food');
    }

    public function course_dressmaking(){
        return view('pages.course_dressmaking');
    }

    public function course_tailoring(){
        return view('pages.course_tailoring');
    }

    public function course_dishwashing(){
        return view('pages.course_dishwashing');
    }

    public function registrationskills()
    {
        return view('pages.registrationskills');
    }

    public function aboutus()
    {
        return view('aboutus.aboutus_page');
    }

}
