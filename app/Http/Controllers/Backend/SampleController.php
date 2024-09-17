<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Sample; // Assuming you have a Sample model
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index()
    {

        $samples = Sample::all();

        // Pass data to the view
        return view('backend.sample.index', compact('samples'));
    }

    public function destroy($id)
    {
        // Find the record by ID and delete it
        $record = Sample::findOrFail($id);
        $record->delete();

        // Redirect to the index page with a success message
        return redirect()->route('sample.index')->with('success', 'Record deleted successfully');
    }


}
