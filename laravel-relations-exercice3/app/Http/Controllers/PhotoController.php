<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    //
    public function index()
    {
        $photos = Photo::all();
        return view("/back/photos/all",compact("photos"));
    }
    public function read($id)
    {
        $photo = Photo::find($id);
        return view("/back/photos/read",compact("photo"));
    }
    public function destroy($id)
    {
        $photo = Photo::find($id);
        $photo->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
