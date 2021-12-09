<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

<<<<<<< Updated upstream:app/Http/Controllers/HomeController.php
class HomeController extends Controller
=======
class Adm_DashboardController extends Controller
>>>>>>> Stashed changes:app/Http/Controllers/Adm_DashboardController.php
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
<<<<<<< Updated upstream:app/Http/Controllers/HomeController.php
    public function userHome()
    {
        return view('user.userHome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
=======
>>>>>>> Stashed changes:app/Http/Controllers/Adm_DashboardController.php
    public function adminHome()
    {
        return view('admin.adminHome');
    }
<<<<<<< Updated upstream:app/Http/Controllers/HomeController.php
  


=======
>>>>>>> Stashed changes:app/Http/Controllers/Adm_DashboardController.php
}
