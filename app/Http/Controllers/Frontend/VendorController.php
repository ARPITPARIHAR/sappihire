<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;

class VendorController extends Controller
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

        $vendor = new Vendor;


        $vendor->name = $request->name;
        $vendor->phone = $request->phone;
        $vendor->email = $request->email;
        $vendor->detail = $request->detail;
        $vendor->subject = $request->subject;
        $vendor->message = $request->message;

        if ($request->hasFile('thumbnail_img')) {
            $fileName = time() . '-vendor-' . $request->file('thumbnail_img')->getClientOriginalName();
            $filePath = $request->file('thumbnail_img')->storeAs('uploads/vendors', $fileName, 'public');
            $vendor->thumbnail_img = '/public/storage/' . $filePath;
        }

        $vendor->save();

        return back()->with('success', 'Thank you! Your submission submitted successfully');
    }

}
