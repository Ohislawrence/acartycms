<?php

namespace App\Http\Controllers;

use App\Models\Coursecat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CoursecatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $coursecats = Coursecat::orderBy('id','DESC')->paginate(5);
        return view('app.admin.coursecat',compact('coursecats'))
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
            'title' => 'required|unique:coursecats,title',

        ]);

        Coursecat::create([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->title),

        ]);


        return redirect()->back()
                        ->with('success','Course Category created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coursecat  $coursecat
     * @return \Illuminate\Http\Response
     */
    public function show(Coursecat $coursecat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coursecat  $coursecat
     * @return \Illuminate\Http\Response
     */
    public function edit(Coursecat $coursecat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coursecat  $coursecat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Coursecat::find($id);
        $this->validate($request, [
            'title' => 'required|unique:coursecats,title',

        ]);

        $update->update([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->title),

        ]);


        return redirect()->back()
                        ->with('success','Course Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coursecat  $coursecat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coursecat = Coursecat::find($id)->delete();
        return redirect()->back()
                        ->with('success','Category deleted successfully');
    }
}
