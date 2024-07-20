<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = Gallery::paginate(15);
        return view('backend.galleries.index', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         $request->validate([
             'title' => 'required|string',
             'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate multiple images
         ]);

         $detail = new Gallery;
         $detail->title = $request->title;

         // Handle multiple images
         if ($request->hasFile('images')) {
             $imagePaths = [];
             foreach ($request->file('images') as $image) {
                 // Generate a unique file name
                 $fileName = time() . '-' . $image->getClientOriginalName();
                 // Store the image
                 $filePath = $image->storeAs('uploads/images', $fileName, 'public');
                 // Save the image path
                 $imagePaths[] = '/public/storage/' . $filePath;
             }
             // Store the image paths in the database (as JSON)
             $detail->image_paths = json_encode($imagePaths);
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
        return view('backend.galleries.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $detail = Gallery::findOrFail(decrypt($id));
        return view('backend.galleries.edit', compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',

            'thumbnail_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $detail = Gallery::findOrFail(decrypt($id));

        if ($request->hasFile('thumbnail_img')) {
            $fileName = time() . '-team-' . $request->file('thumbnail_img')->getClientOriginalName();
            $filePath = $request->file('thumbnail_img')->storeAs('uploads/visions', $fileName, 'public');
            $detail->thumbnail_img = '/public/storage/' . $filePath;
        }
        $detail->title = $request->title;
        $detail->save();

        // Optionally clear cache
        Artisan::call('cache:clear');

        return back()->with('success', 'Detail updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Gallery::findOrFail(decrypt($id))->delete();
        Artisan::call('cache:clear');
        return back()->with('success', 'Detail deleted successfully.');
    }
}
