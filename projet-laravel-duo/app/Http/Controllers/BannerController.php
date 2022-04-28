<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function index()
    {
        $banners = Banner::all();
        return view("/back/banners/all",compact("banners"));
    }
    public function create()
    {
        return view("/back/banners/create");
    }
    public function store(Request $request)
    {
        $banner = new Banner;
        $request->validate([
            'petit'=> 'required',
            'grand'=> 'required',
            'bouton'=> 'required',
            'image'=> 'required',
        ]); // store_validated_anchor;
        $banner->petit = $request->petit;
        $banner->grand = $request->grand;
        $banner->bouton = $request->bouton;
        $banner->image = "/images/banners/" . $request->file("image")->hashName();
        $banner->save(); // store_anchor
        $request->file("image")->storePublicly("/images/banners","public");
        return redirect()->route("banner.index")->with("message", "Banner created with success !");
    }
    public function show($id)
    {
        $banner = Banner::find($id);
        return view("/back/banners/show",compact("banner"));
    }
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view("/back/banners/edit",compact("banner"));
    }
    public function update($id, Request $request)
    {
        $banner = Banner::find($id);
        $request->validate([
            'petit'=> 'required',
            'grand'=> 'required',
            'bouton'=> 'required',
            'image'=> 'required',
        ]); // update_validated_anchor;
        $banner->petit = $request->petit;
        $banner->grand = $request->grand;
        $banner->bouton = $request->bouton;
        $banner->image = $request->image;
        $banner->save(); // update_anchor
        return redirect()->route("banners.index")->with("message", "Banner edited with success !");
    }
    public function destroy($id)
    {
        $banner = Banner::find($id);
        $destination = "/images/banners/" . $banner->image;
        if(File::exists($destination))
        {
            File::delete($destination);
            Storage::disk('public')->delete("/images/banners/" . $banner->image);
        }
        $banner->delete();
        return redirect()->back()->with("message", "Successful delete !");
    }
}
