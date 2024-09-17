<?php

namespace App\Http\Controllers\Backend;

use App\Models\Buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuyerController extends Controller
{
    public function index()
    {

        $samples = Buyer::all();

        // Pass data to the view
        return view('backend.buyer.index', compact('samples'));
    }


    public function destroy($id)
    {
        // Find the record by ID and delete it
        $record = Buyer::findOrFail($id);
        $record->delete();

        // Redirect to the index page with a success message
        return redirect()->route('buyer.index')->with('success', 'Record deleted successfully');
    }

}
