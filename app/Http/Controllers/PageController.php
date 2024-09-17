<?php

namespace App\Http\Controllers;

use App\Models\Management;
use App\Models\Page;
use App\Models\Study;
use App\Models\Relive;
use App\Models\Tender;
use Illuminate\Http\Request;
use App\Models\Trainingevent;

class PageController extends Controller
{
    public function home(Request $request)
    {
        return view('frontend.home');
    }

    public function ourstory(Request $request)
    {
        return view('frontend.ourstory');
    }
    public function sample(Request $request)
    {
        return view('frontend.sample');
    }
    public function product(Request $request)
    {
        return view('frontend.products');
    }

    public function fabric(Request $request)
    {
        return view('frontend.fabric');
    }

    public function garment(Request $request)
    {
        return view('frontend.garment');
    }

    public function buyer(Request $request)
    {
        return view('frontend.buyer');
    }

    public function vendor(Request $request)
    {
        return view('frontend.vendor');
    }



    public function team(Request $request)
    {
        return view('frontend.team');
    }

    public function tenders(Request $request)
    {
        return view('frontend.tenders');
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


    public function training_show($id)
    {

        $trainingEvents = Trainingevent::where('category_id', $id)->get();
        return view('frontend.show', compact('trainingEvents'));
    }
    public function reliving_show($id)
    {
        $trainingEvents = Relive::where('category_id', $id)->get();
        return view('frontend.relivingshow', compact('trainingEvents'));
    }


    public function study_show($id)
    {
        $trainingEvents = Study::where('category_id', $id)->get();
        return view('frontend.studyshow', compact('trainingEvents'));
    }

    public function tender_show($id)
    {
        $trainingEvents = Tender::where('category_id', $id)->get();
        return view('frontend.tendersshow', compact('trainingEvents'));
    }
    public function page($slug)
    {
        $page = Page::where('slug', $slug)->first();
        return view('frontend.page', compact('page'));
    }
    public function managementDetail($slug)
    {
        $management = Management::where('slug', $slug)->first();
        return view('frontend.management-detail', compact('management'));
    }
}
