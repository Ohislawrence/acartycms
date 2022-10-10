<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Coursecat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $instrutors = User::all();
        $coursecat = Coursecat::all();

        $courses = Course::orderBy('id','DESC')->paginate(5);
        return view('app.admin.course',compact('courses', 'instrutors', 'coursecat'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [
            'title' => 'required|unique:courses,title',
            'desc' => 'required',
            'cert' => 'required',
            'cost' => 'required',
            'image' => 'required',
            'coursecat' => 'required',
            'offered_by' => 'required',
        ]);


        $imageName = Str::slug($request->title).time().'.'.$request->image->extension();

        $request->image->move(public_path('courseimages'), $imageName);

        Course::create([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->title),
            'user_id' => auth()->user()->id,
            'desc' => $request->input('desc'),
            'cert' => $request->input('cert'),
            'cost' => $request->input('cost'),
            'image' => $imageName,
            'coursecat_id' => $request->input('coursecat'),
            'offered_by' => $request->input('offered_by'),
        ]);


        return redirect()->back()
                        ->with('success','Course created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id)->delete();
        return redirect()->back()
                        ->with('success','Course deleted successfully');
    }
}
