<?php

namespace App\Http\Controllers;

use App\Models\Blogcat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogcatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $blogcat = Blogcat::orderBy('id','DESC')->paginate(10);
        return view('app.admin.categoryblog',compact('blogcat'))
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
            'category' => 'required|unique:blogcats',

        ]);

        $role = Blogcat::create([
            'category' => $request->category,
            'slug' => Str::slug($request->category),
        ]);

        return redirect()->back()
                        ->with('success','Catetory created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blogcat  $blogcat
     * @return \Illuminate\Http\Response
     */
    public function show(Blogcat $blogcat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blogcat  $blogcat
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogcat $blogcat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blogcat  $blogcat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogcat $blogcat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blogcat  $blogcat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogcat $blogcat)
    {
        $blogcat->delete();
        return redirect()->back()
                        ->with('success','Catetory deleted successfully');
    }
}
