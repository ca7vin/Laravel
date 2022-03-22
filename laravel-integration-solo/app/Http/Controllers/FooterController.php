<?php

namespace App\Http\Controllers;

use App\Http\Requests\FooterRequest;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    
    public function index() {
        $dataFooter = Footer::all();
        return view('back/pages/footer/footer-show', compact('dataFooter'));
    }

    public function destroy($id) {
        $footerDel = Footer::find($id);
        $footerDel->delete();
        return redirect()->back()->with('message2', 'l\'entrée a été supprimée avec succès !');
    }

    public function edit($id) {
        $footerEdit= Footer::find($id);
        return view('back/pages/footer/footer-edit', compact('footerEdit'));
    }

    public function update($id,FooterRequest $request ) {
        $footerEdit= Footer::find($id);
        $footerEdit->titre = $request->titre;
        $footerEdit->icone1 = $request->icone1;
        $footerEdit->icone2 = $request->icone2;
        $footerEdit->icone3 = $request->icone3;
        $footerEdit->copyright = $request->copyright;
        $footerEdit->updated_at = now();
        $footerEdit->save();
        return redirect()->action([FooterController::class, 'index'])->with('message', 'l\'entrée a été éditée avec succès !');
    }

    public function create(){
        return view('back/pages/footer/footer-create');
    }

    public function store(FooterRequest $request){
        $table = new Footer;
        $table->titre1 = $request->titre1;
        $table->icone1 = $request->icone1;
        $table->icone2 = $request->icone2;
        $table->icone3 = $request->icone3;
        $table->copyright = $request->copyright;
        $table->save();
        return redirect()->action([FooterController::class, 'index'])->with('message', 'l\'entrée a été créée avec succès !');
    }
}
