<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $dataContact = Contact::all();
        return view('back/pages/contact/contact-show', compact('dataContact'));
    }

    public function destroy($id) {
        $contactDel = Contact::find($id);
        $contactDel->delete();
        return redirect()->back()->with('message2', 'l\'entrée a été supprimée avec succès !');
    }

    public function edit($id) {
        $contactEdit= Contact::find($id);
        return view('back/pages/contact/contact-edit', compact('contactEdit'));
    }

    public function update($id,ContactRequest $request ) {
        $contactEdit= Contact::find($id);
        $contactEdit->titreTop = $request->titreTop;
        $contactEdit->titreBottom = $request->titreBottom;
        $contactEdit->updated_at = now();
        $contactEdit->save();
        return redirect()->action([ContactController::class, 'index'])->with('message', 'l\'entrée a été éditée avec succès !');
    }

    public function create(){
        return view('back/pages/contact/contact-create');
    }

    public function store(ContactRequest $request){
        $table = new Contact;
        $table->titreTop = $request->titreTop;
        $table->titreBottom = $request->titreBottom;
        $table->save();
        return redirect()->action([ContactController::class, 'index'])->with('message', 'l\'entrée a été créée avec succès !');
    }
}
