<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicerequest;
use DataTables;

class ServiceRequestController extends Controller
{
    function show(Request $request)
    {
        $sericerequest = Servicerequest::orderBy('id','DESC')->paginate(10);
        return view('app.admin.servicerequest', compact('sericerequest'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function detail($id)
    {
        $details = Servicerequest::findorfail($id);
        return view('app.admin.viewservicerequest', compact('details'));
    }


    public function update($id, Request $request)
    {
        $update = Servicerequest::find($id);

        $update->update([
            'datecontacted' => $request->datecontacted,
            'contactmethod' => $request->contactmethod,
            'won' => $request->won,
        ]);

        return redirect()->back()->with('success', 'Updated');
    }

}
