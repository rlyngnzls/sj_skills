<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function skills_gallery(){
        return view('pages.skills_gallery');
    }
}