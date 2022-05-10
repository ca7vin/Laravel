<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

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
        return view("/back/clients/create");
    }
    public function store(Request $request)
    {
        $client = new Client;
        $request->validate([
         'name'=> 'required',
         'date'=> 'required',
         'category'=> 'required',
         'rating'=> 'required',
         'img'=> 'required',
         'quote'=> 'required',
         'job'=> 'required',
        ]); // store_validated_anchor;
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
        return view("/back/clients/edit",compact("client"));
    }
    public function update($id, Request $request)
    {
        $client = Client::find($id);
        $request->validate([
         'name'=> 'required',
         'date'=> 'required',
         'category'=> 'required',
         'rating'=> 'required',
         'img'=> 'required',
         'quote'=> 'required',
         'job'=> 'required',
        ]); // update_validated_anchor;
        $client->active = $request->active;
        $client->name = $request->name;
        $client->date = $request->date;
        $client->category = $request->category;
        $client->rating = $request->rating;
        $client->img = $request->file('img')->hashName();
        $client->quote = $request->quote;
        $client->job = $request->job;
        $client->save(); // update_anchor
        $request->file('img')->storePublicly("images", "public");
        return redirect()->route("clients.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
