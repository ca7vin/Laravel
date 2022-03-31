<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Photo;
use App\Models\Poste;
use Illuminate\Http\Request;

class JoueurController extends Controller
{
    //
    public function index()
    {
        $joueurs = Joueur::all();
        return view("/back/joueurs/all",compact("joueurs"));
    }
    public function create()
    {
        $postes = Poste::all();
        $equipes = Equipe::all();
        return view("/back/joueurs/create", compact("postes", "equipes"));
    }
    public function store(Request $request)
    {
        $joueur = new Joueur;
        $photo = new Photo;
        $equipe = Equipe::find($request->equipe_id);
        $poste = Poste::find($request->poste_id);
        $request->validate([
         'nom'=> 'required',
         'prenom'=> 'required',
         'age'=> 'required',
         'telephone'=> 'required',
         'email'=> 'required',
         'genre'=> 'required',
         'pays'=> 'required',
        ]); // store_validated_anchor;
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->telephone = $request->telephone;
        $joueur->email = $request->email;
        $joueur->genre = $request->genre;
        $joueur->pays = $request->pays;
        $joueur->poste_id = $request->poste_id;
        $joueur->equipe_id = $request->equipe_id;
        $photo->lien = $request->file("image")->hashName();
        // condition effectif et poste
        if ($equipe[$poste->nom] < $poste->limite) {
            $photo->save();
            $joueur->photo_id = $photo->id;
            $equipe[$poste->nom] += 1;
            $joueur->save(); // store_anchor
            $request->file("image")->storePublicly("img", "public");
            $equipe->save(); // store_anchor
            return redirect()->route("joueur.index")->with('message', "Successful storage !");
        } else {
            return redirect()->route("joueur.create")->with('error', "Il y a déjà la nombre de joueurs requis à ce poste!");
        }
    }
    public function read($id)
    {
        $joueur = Joueur::find($id);
        return view("/back/joueurs/read",compact("joueur"));
    }
    public function edit($id)
    {
        $joueur = Joueur::find($id);
        $postes= Poste::all();
        $equipes= Equipe::all();
        return view("/back/joueurs/edit",compact("joueur", "postes", "equipes"));
    }
    public function update($id, Request $request)
    {
        $joueur = Joueur::find($id);
        $photo= Photo::find($joueur->photo_id);
        $equipeAncien= Equipe::find($joueur->equipe_id);
        $posteAncien= Poste::find($joueur->poste_id);
        $request->validate([
         'nom'=> 'required',
         'prenom'=> 'required',
         'age'=> 'required',
         'telephone'=> 'required',
         'email'=> 'required',
         'genre'=> 'required',
         'pays'=> 'required',
        ]); // update_validated_anchor;
        $joueur->nom = $request->nom;
        $joueur->prenom = $request->prenom;
        $joueur->age = $request->age;
        $joueur->telephone = $request->telephone;
        $joueur->email = $request->email;
        $joueur->genre = $request->genre;
        $joueur->pays = $request->pays;
        $joueur->poste_id = $request->poste_id;
        $joueur->equipe_id = $request->equipe_id;
        // new
        $poste = Poste::find($request->poste_id);
        $equipe = Equipe::find($request->equipe_id);
        $photo->lien = $request->file("imageEdit")->hashName();
        $joueur->save(); // update_anchor
        $photo->save(); // update_anchor
        $request->file("imageEdit")->storePublicly("img", "public");
        if ($equipe[$poste->nom] < $poste->limite) {
            $equipeAncien[$posteAncien->nom] -= 1;
            $equipe[$poste->nom] += 1;
            $joueur->save(); // store_anchor
            $equipe->save(); // store_anchor
            $poste->save(); // store_anchor
            $equipeAncien->save(); // store_anchor
            $posteAncien->save(); // store_anchor
            return redirect()->route("joueur.index")->with('message', "Successful storage !");
        } else {
            return redirect()->route("joueur.create")->with('error', "Il y a déjà la nombre de joueurs requis à ce poste!");
        }
    }
    public function destroy($id, Request $request)
    {
        $joueur = Joueur::find($id);
        $equipe = Equipe::find($joueur->equipe->id);
        $poste = Poste::find($joueur->poste->id);
        $equipe[$poste->nom] -= 1;
        $equipe->save(); // store_anchor
        $joueur->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
