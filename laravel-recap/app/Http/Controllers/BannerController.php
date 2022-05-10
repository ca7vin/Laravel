<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function index()
    {
        $banners = Banner::all();
        return view("/back/banners/all",compact("banners"));
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
         'title'=> 'required',
         'text'=> 'required',
         'btn1'=> 'required',
         'icon1'=> 'required',
         'link1'=> 'required',
         'btn2'=> 'required',
         'icon2'=> 'required',
         'link2'=> 'required',
         'img'=> 'required',
        ]); 
        $banner->title = $request->title;
        $banner->text = $request->text;
        $banner->btn1 = $request->btn1;
        $banner->icon1 = $request->icon1;
        $banner->link1 = $request->link1;
        $banner->btn2 = $request->btn2;
        $banner->icon2 = $request->icon2;
        $banner->link2 = $request->link2;
        $banner->img = $request->file('img')->hashName();
        $banner->save(); 
        $request->file('img')->storePublicly("images", "public");
        return redirect()->route("banner.index")->with('message', "Successful update !");
    }
}
