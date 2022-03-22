<?php

namespace App\Http\Controllers;

use App\Http\Requests\HeaderRequest;
use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index() {
        $dataHeader = Header::all();
        return view('back/pages/header/header-show', compact('dataHeader'));
    }

    public function destroy($id) {
        $headerDel = Header::find($id);
        $headerDel->delete();
        return redirect()->back()->with('message2', 'l\'entrée a été supprimée avec succès !');
    }

    public function edit($id) {
        $headerEdit= Header::find($id);
        return view('back/pages/header/header-edit', compact('headerEdit'));
    }

    public function update($id,HeaderRequest $request ) {
        $headerEdit= Header::find($id);
        $headerEdit->navText = $request->navText;
        $headerEdit->navLink = $request->navLink;
        $headerEdit->image = $request->image;
        $headerEdit->updated_at = now();
        $headerEdit->save();
        return redirect()->action([HeaderController::class, 'index'])->with('message', 'l\'entrée a été éditée avec succès !');
    }

    public function create(){
        return view('back/pages/header/header-create');
    }

    public function store(HeaderRequest $request){
        $table = new Header;
        $table->navText = $request->navText;
        $table->navLink = $request->navLink;
        $table->image = $request->image;
        $table->save();
        return redirect()->action([HeaderController::class, 'index'])->with('message', 'l\'entrée a été créée avec succès !');
    }
}
