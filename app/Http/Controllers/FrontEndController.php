<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home()
    {
        return view('frontend.partials.home');
    }
    public function about()
    {
        return view('frontend.partials.about');
    }
    public function contact()
    {
        return view('frontend.partials.contact');
    }
    public function team()
    {
        return view('frontend.partials.team');
    }
    public function two_wheeler()
    {
        return view('frontend.partials.two_wheeler');
    }
    public function gallery()
    {
        return view('frontend.partials.gallery');
    }

}
