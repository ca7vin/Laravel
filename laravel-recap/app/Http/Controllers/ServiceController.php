<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

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
        if (! Gate::allows('create-service')) {
            abort(403);
        }
        return view("/back/services/create", compact('services'));
    }
    public function store(Request $request)
    {
        $service = new Service;
        $this->authorize('create', Service::class);
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
        if (! Gate::allows('update-service')) {
            abort(403);
        }
        return view("/back/services/edit",compact("service", "services"));
    }
    public function update($id, Request $request)
    {
        $service = Service::find($id);
        $this->authorize('update', $service);
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
        $this->authorize('delete', $service);
        $service->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
