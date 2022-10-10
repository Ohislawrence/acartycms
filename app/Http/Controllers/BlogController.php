<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Blogcat;

class BlogController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:blog-list|blog-create|blog-edit|blog-delete', ['only' => ['index','show']]);
         $this->middleware('permission:blog-create', ['only' => ['create','store']]);
         $this->middleware('permission:blog-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:blog-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cat = Blogcat::all();
        $blogs = Blog::orderBy('id','DESC')->paginate(10);
        return view('app.admin.blogs',compact('blogs','cat'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = Blogcat::all();
        return view('app.admin.blogcreate', compact('cat'));
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
            'title' => 'required|unique:roles,name',
            'content' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('blogimages'), $imageName);

        $role = Blog::create([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->title),
            'desc' => $request->input('content'),
            'banner' => $imageName,
            'user_id'=> auth()->user()->id,
            'category' => $request->input('category'),
        ]);

        return redirect()->route('blogs.index')
                        ->with('success','Blog created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {

        $cat = Blogcat::all();
        return view('app.admin.blogedit', compact('blog','cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|unique:blogs',
            'content' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('blogimages'), $imageName);

        $upblog = Blog::findorfail($id);

        $upblog->update([
            'title' => $request->input('title'),
            'slug' => Str::slug($request->title),
            'desc' => $request->input('content'),
            'banner' => $imageName,
            'user_id'=> auth()->user()->id,
            'category' => $request->input('category'),
        ]);

        return redirect()->route('blogs.index')
                        ->with('success','Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->back()
                        ->with('success','Catetory deleted successfully');
    }
}
