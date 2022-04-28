<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    //
    public function index()
    {
            $services = Service::all();
            return view("/back/services/all", compact("services"));
    }
    
    public function create()
    {
        $service = Service::all();
        return view("/back/services/create", compact('service'));
    }
    public function store(Request $request)
    {
        $service = new Service;
        $this->authorize('create', Service::class);
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'image' => 'required',
        ]); // store_validated_anchor;
        $service->title = $request->title;
        $service->text = $request->text;
        $service->image = "/images/services/" . $request->file("image")->hashName();
        $service->save(); // store_anchor
        $request->file("image")->storePublicly("/images/services", "public");
        return redirect()->route("services.index")->with('message', "Service created with success !");
    }
    public function show($id)
    {
        $service = Service::find($id);
        return view("/back/services/read", compact("service"));
    }
    public function edit($id)
    {
        $service = Service::find($id);
        $services = Service::all();
        return view("/back/services/edit", compact("service", "services"));
    }
    public function update($id, Request $request)
    {
        $service = Service::find($id);
        $this->authorize('update', $service);
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'image' => 'required',
        ]); // update_validated_anchor;
        $service->title = $request->title;
        $service->text = $request->text;
        $service->image = $request->image;
        $service->save(); // update_anchor
        return redirect()->route("services.index")->with('message', "Service edited with success !");
    }
    public function destroy($id, Request $request)
    {
        if(decrypt($request->id) === $id){
            $service = Service::find($id);
            $this->authorize('update', $service);
            $service->delete();
            return redirect()->back()->with('message', "Successful delete !");    
        } else {
            return redirect()->back()->with('message', "You don't have the authorization to dot that");
        }
}
}