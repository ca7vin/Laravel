<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $services = Service::all();
        return view("/back/services/all",compact("services"));
    }
    public function create()
    {
        return view("/back/services/create");
    }
    public function store(Request $request)
    {
        $service = new Service;
        $request->validate([
         'icon'=> 'required',
         'iconhover'=> 'required',
         'class'=> 'required',
         'name'=> 'required',
         'text'=> 'required',
         'link'=> 'required',
        ]); // store_validated_anchor;
        $service->icon = $request->icon;
        $service->iconhover = $request->iconhover;
        $service->class = $request->class;
        $service->name = $request->name;
        $service->text = $request->text;
        $service->link = $request->link;
        $service->save(); // store_anchor
        return redirect()->route("service.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $service = Service::find($id);
        return view("/back/services/read",compact("service"));
    }
    public function edit($id)
    {
        $service = Service::find($id);
        return view("/back/services/edit",compact("service"));
    }
    public function update($id, Request $request)
    {
        $service = Service::find($id);
        $request->validate([
         'icon'=> 'required',
         'iconhover'=> 'required',
         'class'=> 'required',
         'name'=> 'required',
         'text'=> 'required',
         'link'=> 'required',
        ]); // update_validated_anchor;
        $service->icon = $request->icon;
        $service->iconhover = $request->iconhover;
        $service->class = $request->class;
        $service->name = $request->name;
        $service->text = $request->text;
        $service->link = $request->link;
        $service->save(); // update_anchor
        return redirect()->route("service.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
