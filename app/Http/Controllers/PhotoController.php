<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller{
    public function index(Request $request){

        $photos = Photo::all();
    
        if ($request->wantsJson()) {
            return response()->json($photos, 200);
        }
    
        return view('photos.index', compact('photos'));
        // curl -H "Accept: application/json" http://127.0.0.1:8000/api/photos
    }

    public function create(){
        return view('photos.create');
    }

    public function store(Request $request){
                // Validate the form input
        $request->validate([
            'title' => 'required|string|max:255',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the image upload
        $imagePath = $request->file('image_path')->store('photOne', 'public');

        // Save the photo details in the database
        Photo::create(attributes: [
            'title' => $request->title,
            'image_path' => $imagePath,
        ]);
    

        return redirect()->route('photos.index')->with('success', 'Photo uploaded successfully.');
    }
    

    public function show(Photo $photo){
        return view('photos.show', compact('photo'));
    }

    public function edit(Photo $photo){
        return view('photos.edit', compact('photo'));
    }

    public function update(Request $request, Photo $photo){
    // Validate input data
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Handle file upload if a new image is uploaded
    if ($request->hasFile('image_path')) {
        // Delete the old image
        if ($photo->image_path && file_exists(storage_path('app/public/' . $photo->image_path))) {
            unlink(storage_path('app/public/' . $photo->image_path));
        }

        // Store the new image
        $photo->image_path = $request->file('image_path')->store('photos', 'public');
    }

    // Update title
    $photo->title = $validatedData['title'];
    $photo->save();

    // Redirect with a success message
    return redirect()->route('photos.index')->with('success', 'Photo updated successfully!');
   }


    public function destroy(Photo $photo){
        // Storage::disk('public')->delete($photo->image_path);
        $photo->delete();
        return redirect()->route('photos.index')->with('success', 'Photo deleted successfully.');
    }


}
