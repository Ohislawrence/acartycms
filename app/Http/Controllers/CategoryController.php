<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $category = Category::orderBy('id','DESC')->paginate(10);
        return view('app.admin.categoryblog',compact('category'))
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
            'category' => 'required|unique:categoires',

        ]);

        $role = Category::create([
            'category' => $request->category,
            'slug' => Str::slug($request->category),
        ]);

        return redirect()->route('app.admin.categoryblog')
                        ->with('success','Catetory created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catetory  $catetory
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catetory  $catetory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catetory = Category::find($id);
        return view('app.admin.categoryblog',compact('catetory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catetory  $catetory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catetory $catetory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catetory  $catetory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('app.admin.categoryblog')
                        ->with('success','Catetory deleted successfully');
    }
}
