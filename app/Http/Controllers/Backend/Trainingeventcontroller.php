<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Trainingevent;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Artisan;

class TrainingeventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = Trainingevent::paginate(15);
        return view('backend.trainingevent.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories =Trainingevent::all();

        // Pass categories to the view
        return view('backend.trainingevent.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|required_without:pdf_file|string', // Title is required only if pdf_file is provided
        'category_id' => 'nullable|exists:categories,id',
        'pdf_file' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $detail = new Trainingevent;

        $detail->title = $request->title;
        $detail->category_id = $request->category_id;
        if ($request->hasFile('pdf_file')) {
          $fileName = time() . '-trainingevent-' . $request->file('pdf_file')->getClientOriginalName();
          $filePath = $request->file('pdf_file')->storeAs('uploads/trainingevents', $fileName, 'public');
          $detail->pdf_file = '/public/storage/' . $filePath;

        }
        $detail->save();
        Artisan::call('cache:clear');
        return back()->with('success', 'Details added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
{
    $trainingEvent = Trainingevent::findOrFail($id);
    $relatedPDFs = $trainingEvent->pdfs; // Assuming you have a relation or a method to fetch related PDFs

    return view('frontend.training.show', compact('trainingEvent', 'relatedPDFs'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $detail = Trainingevent::findOrFail(decrypt($id));
        return view('backend.trainingevent.edit', compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',

        ]);
        $detail = Trainingevent::findOrFail(decrypt($id));
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
        Trainingevent::findOrFail(decrypt($id))->delete();
        Artisan::call('cache:clear');
        return back()->with('success', 'Detail deleted successfully.');
    }
}
