<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index() {
        $dataTestimonial = Testimonial::all();
        return view('back/pages/testimonial/testimonial-show', compact('dataTestimonial'));
    }

    public function destroy($id) {
        $testimonialDel = Testimonial::find($id);
        $testimonialDel->delete();
        return redirect()->back()->with('message2', 'l\'entrée a été supprimée avec succès !');
    }

    public function edit($id) {
        $testimonialEdit= Testimonial::find($id);
        return view('back/pages/testimonial/testimonial-edit', compact('testimonialEdit'));
    }

    public function update($id,TestimonialRequest $request ) {
        $testimonialEdit= Testimonial::find($id);
        $testimonialEdit->titre = $request->titre;
        $testimonialEdit->image = $request->image;
        $testimonialEdit->titre2 = $request->titre2;
        $testimonialEdit->texte = $request->texte;
        $testimonialEdit->save();
        return redirect()->action([TestimonialController::class, 'index'])->with('message', 'l\'entrée a été éditée avec succès !');
    }

    public function create(){
        return view('back/pages/testimonial/testimonial-create');
    }

    public function store(TestimonialRequest $request){
        $table = new Testimonial;
        $table->titre = $request->titre;
        $table->image = $request->image;
        $table->titre2 = $request->titre2;
        $table->texte = $request->texte;
        $table->save();
        return redirect()->action([TestimonialController::class, 'index'])->with('message', 'l\'entrée a été créée avec succès !');
    }
}
