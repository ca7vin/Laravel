<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class TestimonialController extends Controller
{
    //
    public function index()
    {
        // dd(Auth::user()->role_id);
        $testimonials = Testimonial::paginate(4);
        return view("/back/testimonials/all",compact("testimonials"));
    }
    public function create()
    {
        if(! Gate::allows('create-testimonial')){
            abort(403);
        }
        return view("/back/testimonials/create");
    }
    public function store(Request $request)
    {
        $testimonial = new Testimonial;
        $this->authorize('create', Testimonial::class);
        $request->validate([
         'name'=> 'required',
         'text'=> 'required',
         'role'=> 'required',
        ]); // store_validated_anchor;
        $testimonial->name = $request->name;
        $testimonial->text = $request->text;
        $testimonial->role = $request->role;
        $testimonial->user_id = Auth::user()->id;
        $testimonial->save(); // store_anchor
        return redirect()->route("testimonials.index")->with('message', "Testimonial created with success !");
    }
    // public function show($id)
    // {
    //     $testimonial = Testimonial::find($id);
    //     return view("/back/testimonials/read",compact("testimonial"));
    // }
    public function show($id)
    {
        $testimonial = Testimonial::find($id);
        if (! Gate::allows('create-testimonial')) {
            abort(403);
        }
        return view("/back/testimonials/read", compact("testimonial"));
    }
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        if (! Gate::allows('create-testimonial')) {
            abort(403);
        }
        return view("/back/testimonials/edit", compact("testimonial"));
    }
    // public function edit($id)
    // {
    //     $testimonial = Testimonial::find($id);
    //     return view("/back/testimonials/edit",compact("testimonial"));
    // }
    public function update($id, Request $request)
    {
        $testimonial = Testimonial::find($id);
        $this->authorize('update', $testimonial);
        $request->validate([
         'name'=> 'required',
         'text'=> 'required',
         'role'=> 'required',
        ]); // update_validated_anchor;
        $testimonial->name = $request->name;
        $testimonial->text = $request->text;
        $testimonial->role = $request->role;
        $testimonial->validation = $request->validation;
        // $testimonial->validation = false;
        $testimonial->save(); // update_anchor
        return redirect()->route("testimonials.index")->with('message', "Testimonial edited with success !");
    }
    public function destroy($id, Request $request)
    {
        if(decrypt($request->id) === $id && Auth::user()->id === $id){
            $testimonial = Testimonial::find($id);
            $this->authorize('update', $testimonial);
            $testimonial->delete();
            return redirect()->back()->with('message', "Successful delete !");
        } else {
            return redirect()->back()->with('message', "You don't have the authorization to do that !");
        }
    }
}
