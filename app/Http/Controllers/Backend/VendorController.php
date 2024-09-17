<?php

namespace App\Http\Controllers\Backend;

use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VendorController extends Controller
{
    public function index()
    {

        $records = Vendor::all();

        // Pass data to the view
        return view('backend.vendor.index', compact('records'));
    }

    public function destroy($id)
    {
        // Find the record by ID and delete it
        $record = Vendor::findOrFail($id);
        $record->delete();

        // Redirect to the index page with a success message
        return redirect()->route('vendor.index')->with('success', 'Record deleted successfully');
    }


}
