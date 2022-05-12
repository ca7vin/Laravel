<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class ClientController extends Controller
{
    //
    public function index()
    {
        $clients = Client::all();
        return view("/back/clients/all",compact("clients"));
    }
    public function create()
    {
        if (! Gate::allows('create-client')) {
            abort(403);
        }
        return view("/back/clients/create");
    }
    public function store(Request $request)
    {
        $client = new Client;
        $this->authorize('create', Client::class);
        $request->validate([
         'name'=> 'required',
         'date'=> 'required',
         'category'=> 'required',
         'rating'=> 'required',
         'img'=> 'required',
         'quote'=> 'required',
         'job'=> 'required',
        ]); 
        $client->active = $request->active;
        $client->name = $request->name;
        $client->date = $request->date;
        $client->category = $request->category;
        $client->rating = $request->rating;
        $client->img = $request->file('img')->hashName();
        $client->quote = $request->quote;
        $client->job = $request->job;
        $client->save(); 
        $request->file('img')->storePublicly("images", "public");
        return redirect()->route("clients.index")->with('message', "Successful storage !");
    }
    public function show($id)
    {
        $client = Client::find($id);
        return view("/back/clients/read",compact("client"));
    }
    public function edit($id)
    {
        $client = Client::find($id);
        if (! Gate::allows('update-client')) {
            abort(403);
        }
        return view("/back/clients/edit",compact("client"));
    }
    public function update($id, Request $request)
    {
        $client = Client::find($id);
        $this->authorize('update', $client);
        $request->validate([
         'name'=> 'required',
         'date'=> 'required',
         'category'=> 'required',
         'rating'=> 'required',
         'img'=> 'required',
         'quote'=> 'required',
         'job'=> 'required',
        ]); 
        $client->active = $request->active;
        $client->name = $request->name;
        $client->date = $request->date;
        $client->category = $request->category;
        $client->rating = $request->rating;
        $client->quote = $request->quote;
        $client->job = $request->job;
        if (File::exists("images/". $client->img) && $request->img == null) {
            $client->img = $client->img;
        } else {
            File::delete("images/". $client->img);
            $client->img = $request->file('img')->hashName();
            $request->file('img')->storePublicly("images", "public");
        }
        $client->save(); 
        return redirect()->route("clients.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $client = Client::find($id);
        $this->authorize('update', $client);
        $client->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
