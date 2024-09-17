<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|integer',
            'email' => 'required|string|email',
            'detail' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
            'thumbnail_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $team = new Team;


        $team->name = $request->name;
        $team->phone = $request->phone;
        $team->email = $request->email;
        $team->detail = $request->detail;
        $team->subject = $request->subject;
        $team->message = $request->message;

        if ($request->hasFile('thumbnail_img')) {
            $fileName = time() . '-team-' . $request->file('thumbnail_img')->getClientOriginalName();
            $filePath = $request->file('thumbnail_img')->storeAs('uploads/teams', $fileName, 'public');
            $team->thumbnail_img = '/public/storage/' . $filePath;
        }

        $team->save();

        return back()->with('success', 'Thank you! Your submission submitted successfully');
    }
}
