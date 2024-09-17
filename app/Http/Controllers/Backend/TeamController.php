<?php

namespace App\Http\Controllers\Backend;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index()
    {

        $records = Team::all();

        // Pass data to the view
        return view('backend.team.index', compact('records'));
    }

    public function destroy($id)
    {
        // Find the record by ID and delete it
        $record = Team::findOrFail($id);
        $record->delete();

        // Redirect to the index page with a success message
        return redirect()->route('team.index')->with('success', 'Record deleted successfully');
    }



}
