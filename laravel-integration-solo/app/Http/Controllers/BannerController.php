<?php

namespace App\Http\Controllers;

use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index() {
        $dataBanner = Banner::all();
        return view('back/pages/banner/banner-show', compact('dataBanner'));
    }

    public function destroy($id) {
        $bannerDel = Banner::find($id);
        $bannerDel->delete();
        return redirect()->back()->with('message', 'l\'entrée a été supprimée avec succès !');
    }

    public function edit($id) {
        $bannerEdit= Banner::find($id);
        return view('back/pages/banner/banner-edit', compact('bannerEdit'));
    }

    public function update($id,BannerRequest $request ) {
        $bannerEdit= Banner::find($id);
        $bannerEdit->titre = $request->titre;
        $bannerEdit->texte = $request->texte;
        $bannerEdit->lien = $request->lien;
        $bannerEdit->image = $request->image;

        $bannerEdit->updated_at = now();
        $bannerEdit->save();
        return redirect()->action([BannerController::class, 'index'])->with('message', 'l\'entrée a été éditée avec succès !');
    }

    public function create(){
        return view('back/pages/banner/banner-create');
    }

    public function store(BannerRequest $request){
        $table = new Banner;
        $table->titre = $request->titre;
        $table->texte = $request->texte;
        $table->lien = $request->lien;
        $table->image = $request->image;
        $table->save();
        return redirect()->action([BannerController::class, 'index'])->with('message', 'l\'entrée a été créée avec succès !');
    }
}
