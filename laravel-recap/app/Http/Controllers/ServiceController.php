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
        $services = Service::all();
        return view("/back/services/create", compact('services'));
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
        ]); 
        $service->icon = $request->icon;
        $service->iconhover = $request->iconhover;
        $service->class = $request->class;
        $service->name = $request->name;
        $service->text = $request->text;
        $service->link = $request->link;
        $service->save(); 
        return redirect()->route("services.index")->with('message', "Successful storage !");
    }
    public function show($id)
    {
        $service = Service::find($id);
        return view("/back/services/read",compact("service"));
    }
    public function edit($id)
    {
        $service = Service::find($id);
        $services = Service::all();
        return view("/back/services/edit",compact("service", "services"));
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
        ]); 
        $service->icon = $request->icon;
        $service->iconhover = $request->iconhover;
        $service->class = $request->class;
        $service->name = $request->name;
        $service->text = $request->text;
        $service->link = $request->link;
        $service->save(); 
        return redirect()->route("services.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
