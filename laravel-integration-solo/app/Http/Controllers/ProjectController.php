<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $dataProject = Project::all();
        return view('back/pages/project/project-show', compact('dataProject'));
    }

    public function destroy($id) {
        $projectDel = Project::find($id);
        $projectDel->delete();
        return redirect()->back()->with('message2', 'l\'entrée a été supprimée avec succès !');
    }

    public function edit($id) {
        $projectEdit= Project::find($id);
        return view('back/pages/project/project-edit', compact('projectEdit'));
    }

    public function update($id,ProjectRequest $request ) {
        $projectEdit= Project::find($id);
        $projectEdit->titreTop = $request->titreTop;
        $projectEdit->titreMid = $request->titreMid;
        $projectEdit->titreBottom = $request->titreBottom;
        $projectEdit->image = $request->image;
        $projectEdit->texte = $request->texte;
        $projectEdit->lien = $request->lien;

        return redirect()->action([ProjectController::class, 'index'])->with('message', 'l\'entrée a été éditée avec succès !');
    }

    public function create(){
        return view('back/pages/project/project-create');
    }

    public function store(ProjectRequest $request){
        $table = new Project;
        $table->titreTop = $request->titreTop;
        $table->titreMid = $request->titreMid;
        $table->titreBottom = $request->titreBottom;
        $table->image = $request->image;
        $table->texte = $request->texte;
        $table->lien = $request->lien;
        $table->save();
        return redirect()->action([ProjectController::class, 'index'])->with('message', 'l\'entrée a été créée avec succès !');
    }
}
