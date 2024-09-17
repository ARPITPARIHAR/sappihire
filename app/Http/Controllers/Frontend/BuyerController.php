<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Buyer;
class BuyerController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',

            'phone' => 'required|string',
            'email' => 'required|string',
            'detail' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',

        ]);

        $buyer = new Buyer;

        $buyer->name = $request->name;
        $buyer->phone = $request->phone;

        $buyer->email = $request->email;
        $buyer->detail = $request->detail;
        $buyer->subject = $request->subject;
        $buyer->message = $request->message;

        $buyer->save();

        return back()->with('success', 'Thank you! Your submission submitted successfully');

    }

}
