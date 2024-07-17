<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Vision;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class VisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = Vision::paginate(15);
        return view('backend.vision.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.vision.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',

        ]);

        $detail = new Vision;

        $detail->title = $request->title;
        $detail->save();
        Artisan::call('cache:clear');
        return back()->with('success', 'Details added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('backend.vision.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $detail = Vision::findOrFail(decrypt($id));
        return view('backend.vision.edit', compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',

        ]);
        $detail = Vision::findOrFail(decrypt($id));
        $detail->title= $request->title;
        $detail->update();
        Artisan::call('cache:clear');
        return back()->with('success', 'Detail updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Vision::findOrFail(decrypt($id))->delete();
        Artisan::call('cache:clear');
        return back()->with('success', 'Detail deleted successfully.');
    }
}
