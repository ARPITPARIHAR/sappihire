<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sample;
class SampleController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'first' => 'required|string',
            'last' => 'required|string',
            'number' => 'required|string',
            'email' => 'required|string',
            'detail' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',

        ]);

        $sample = new Sample;

        $sample->first = $request->first;
        $sample->last = $request->last;
        $sample->number = $request->number;
        $sample->email = $request->email;
        $sample->detail = $request->detail;
        $sample->subject = $request->subject;
        $sample->message = $request->message;

        $sample->save();

        return back()->with('success', 'Thank you! Your submission submitted successfully');

    }

}
