<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view("/back/courses/all",compact("courses"));
    }
    public function create()
    {
        $course = Course::all();
        return view("/back/courses/create", compact('course'));
    }
    public function store(Request $request)
    {
        $course = new Course;
        $request->validate([
         'title'=> 'required',
         'description1'=> 'required',
         'description2'=> 'required',
         'info1'=> 'required',
         'info2'=> 'required',
         'info3'=> 'required',
         'price'=> 'required',
         'image'=> 'required',
        ]); // store_validated_anchor;
        $course->title = $request->title;
        $course->description1 = $request->description1;
        $course->description2 = $request->description2;
        $course->info1 = $request->info1;
        $course->info2 = $request->info2;
        $course->info3 = $request->info3;
        $course->price = $request->price;
        $course->image = "/images/courses/" . $request->file("image")->hashName();
        $course->save(); // store_anchor
        $request->file("image")->storePublicly("/images/courses","public");
        return redirect()->route("courses.index")->with('message', "Course created with success !");
    }
    public function show($id)
    {
        $course = Course::find($id);
        return view("/back/courses/read",compact("course"));
    }
    public function edit($id)
    {
        $course = Course::find($id);
        $courses = Course::all();
        return view("/back/courses/edit",compact("course","courses"));
    }
    public function update($id, Request $request)
    {
        $course = Course::find($id);
        $request->validate([
            'title'=> 'required',
            'description1'=> 'required',
            'description2'=> 'required',
            'info1'=> 'required',
            'info2'=> 'required',
            'info3'=> 'required',
            'price'=> 'required',
            'image'=> 'required',
           ]); // store_validated_anchor;
           $course->title = $request->title;
           $course->description1 = $request->description1;
           $course->description2 = $request->description2;
           $course->info1 = $request->info1;
           $course->info2 = $request->info2;
           $course->info3 = $request->info3;
           $course->price = $request->price;
           $course->image = "/images/courses/" . $request->file("image")->hashName();
           $course->save(); // store_anchor
           $request->file("image")->storePublicly("/images/courses","public");
        return redirect()->route("courses.index")->with('message', "Course edited with success !");
    }
    public function destroy($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
