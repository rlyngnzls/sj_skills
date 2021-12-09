<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ins_DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function instructorHome()
    {
        return view('instructor.instructorHome');
    }
}
