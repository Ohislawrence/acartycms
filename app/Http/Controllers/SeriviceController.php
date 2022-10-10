<?php

namespace App\Http\Controllers;

use App\Models\Serivice;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SeriviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $services = Serivice::orderBy('id','DESC')->paginate(10);
        return view('app.admin.services', compact('services'))->with('i', ($request->input('page', 1) - 1) * 5);
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
            'service' => 'required|unique:serivices,service',
            'desc' => 'required',
            'st1' => 'required',
            'st1img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'st1desc' => 'required',
            'st2' => 'required',
            'stimg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'st2desc' => 'required',
        ]);

        if($request->st1img)
        {
            $st1 = time().'.'.$request->st1img->extension();
            $request->st1img->move(public_path('serviceimages'), $st1);
        }

        if($request->stimg)
        {
            $st2 = rand(10,100).time().'.'.$request->stimg->extension();
            $request->stimg->move(public_path('serviceimages'), $st2);
        }

        Serivice::create([
            'service' => $request->input('service'),
            'slug' => Str::slug($request->service),
            'desc' => $request->input('desc'),
            'st1' => $request->input('st1'),
            'st1img' => $st1,
            'st1desc' => $request->input('st1desc'),
            'st2' => $request->input('st2'),
            'stimg' => $st2,
            'st2desc' => $request->input('st2desc'),
        ]);

        return redirect()->back()
                        ->with('success','Service added !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Serivice  $serivice
     * @return \Illuminate\Http\Response
     */
    public function show(Serivice $serivice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serivice  $serivice
     * @return \Illuminate\Http\Response
     */
    public function edit(Serivice $serivice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Serivice  $serivice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'service' => 'required|unique:serivices,service',
            'desc' => 'required',
            'st1' => 'required',
            'st1img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'st1desc' => 'required',
            'st2' => 'required',
            'stimg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'st2desc' => 'required',
        ]);

        if($request->st1img)
        {
            $st1 = time().'.'.$request->st1img->extension();
            $request->st1img->move(public_path('serviceimages'), $st1);
        }

        if($request->stimg)
        {
            $st2 = time().'.'.$request->stimg->extension();
            $request->stimg->move(public_path('serviceimages'), $st2);
        }


        $updates = Serivice::findorfail($id);

        $updates->update([
            'service' => $request->input('service'),
            'slug' => Str::slug($request->service),
            'desc' => $request->input('desc'),
            'st1' => $request->input('st1'),
            'st1img' => $st1,
            'st1desc' => $request->input('st1desc'),
            'st2' => $request->input('st2'),
            'stimg' => $st2,
            'st2desc' => $request->input('st2desc'),
        ]);

        return redirect()->back()
                        ->with('success','Service updated !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serivice  $serivice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Serivice::find($id);
        $service->delete();
        return redirect()->back()
                        ->with('success','Services deleted successfully');
    }
}
