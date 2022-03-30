<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use App\Models\Joueur;
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
        $request->validate([
         'nom'=> 'required',
         'prenom'=> 'required',
         'age'=> 'required',
         'telephone'=> 'required',
         'email'=> 'required',
         'genre'=> 'required',
         'pays'=> 'required',
         'poste_id'=> 'required',
         'equipe_id'=> 'required',
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
        // condition effectif et poste
        if ($joueur->poste->nombre < $joueur->poste->limite) {
            $joueur->poste->nombre += 1;
            $joueur->save(); // store_anchor
            $joueur->poste->save(); // store_anchor
            return redirect()->route("joueur.index")->with('message', "Successful storage !");
        } else {
            return redirect()->route("joueur.create")->with('message', "Il ya déjà la nombre de joueurs requis à ce poste!");
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
        return view("/back/joueurs/edit",compact("joueur"));
    }
    public function update($id, Request $request)
    {
        $joueur = Joueur::find($id);
        $request->validate([
         'nom'=> 'required',
         'prenom'=> 'required',
         'age'=> 'required',
         'telephone'=> 'required',
         'email'=> 'required',
         'genre'=> 'required',
         'pays'=> 'required',
         'poste_id'=> 'required',
         'equipe_id'=> 'required',
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
        $joueur->save(); // update_anchor
        return redirect()->route("joueur.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $joueur = Joueur::find($id);
        $joueur->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
