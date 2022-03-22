<?php

namespace App\Http\Controllers;

use App\Http\Requests\BusinessRequest;
use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index() {
        $dataBusiness = Business::all();
        return view('back/pages/business/business-show', compact('dataBusiness'));
    }

    public function destroy($id) {
        $businessDel = Business::find($id);
        $businessDel->delete();
        return redirect()->back()->with('message2', 'l\'entrée a été supprimée avec succès !');
    }

    public function edit($id) {
        $businessEdit= Business::find($id);
        return view('back/pages/business/business-edit', compact('businessEdit'));
    }

    public function update($id,BusinessRequest $request ) {
        $businessEdit= Business::find($id);
        $businessEdit->titreTop = $request->titreTop;
        $businessEdit->titreMid = $request->titreMid;
        $businessEdit->titreBottom = $request->titreBottom;
        $businessEdit->image = $request->image;
        $businessEdit->texte = $request->texte;
        $businessEdit->lien = $request->lien;

        $businessEdit->updated_at = now();
        $businessEdit->save();
        return redirect()->action([BusinessController::class, 'index'])->with('message', 'l\'entrée a été éditée avec succès !');
    }

    public function create(){
        return view('back/pages/business/business-create');
    }

    public function store(BusinessRequest $request){
        $table = new Business;
        $table->titreTop = $request->titreTop;
        $table->titreMid = $request->titreMid;
        $table->titreBottom = $request->titreBottom;
        $table->image = $request->image;
        $table->texte = $request->texte;
        $table->lien = $request->lien;
        $table->save();
        return redirect()->action([BusinessController::class, 'index'])->with('message', 'l\'entrée a été créée avec succès !');
    }
}
