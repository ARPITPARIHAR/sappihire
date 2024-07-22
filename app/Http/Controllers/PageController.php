<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {
        return view('frontend.home');
    }

    public function vision(Request $request)
    {
        return view('frontend.vision');
    }
    public function room(Request $request)
    {
        return view('frontend.room');
    }
    public function infastructure(Request $request)
    {
        return view('frontend.infastructure');
    }

    public function mission(Request $request)
    {
        return view('frontend.mission');
    }

    public function contact_us(Request $request)
    {
        return view('frontend.contact');
    }

    public function hostel_facility(Request $request)
    {
        return view('frontend.hostel');
    }

    public function about(Request $request)
    {
        return view('frontend.about');
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
    public function studymaterial(Request $request)
    {
        return view('frontend.studymaterial');
    }
    public function relivingorders(Request $request)
    {
        return view('frontend.relivingorders');
    }
    public function feedback(Request $request)
    {
        return view('frontend.feedback');
    }





}
