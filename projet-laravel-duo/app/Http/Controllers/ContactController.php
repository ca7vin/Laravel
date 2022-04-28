<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        $contacts = Contact::all();
        return view("/back/contacts/all",compact("contacts"));
    }
    public function show($id)
    {
        $contact = Contact::find($id);
        return view("/back/contacts/read",compact("contact"));
    }
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view("/back/contacts/edit",compact("contact"));
    }
    public function update($id, Request $request)
    {
        $contact = Contact::find($id);
        $request->validate([
         'map'=> 'required',
         'phone'=> 'required',
         'mobile'=> 'required',
        ]); // update_validated_anchor;
        $contact->map = $request->map;
        $contact->phone = $request->phone;
        $contact->mobile = $request->mobile;
        $contact->save(); // update_anchor
        return redirect()->route("contacts.index")->with('message', "Contact edited with success !");
    }
}