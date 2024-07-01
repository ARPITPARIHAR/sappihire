<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {
        return view('frontend.home');
    }

    public function contact_us(Request $request)
    {
        return view('frontend.contact');
    }
    public function gallery(Request $request)
    {
        return view('frontend.gallery');
    }
    public function placementservice(Request $request)
    {
        return view('frontend.placementservice');
    }

    public function boardofdirectory(Request $request)
    {
        return view('frontend.boardofdirectory');
    }
    public function teamofmember(Request $request)
    {
        return view('frontend.teammember');
    }
    public function traningprogramme(Request $request)
    {
        return view('frontend.traningprogramme');
    }

}
