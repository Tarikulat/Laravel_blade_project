<?php

namespace App\Http\Controllers;
use App\Models\UnitModel;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.units.add_units');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request);
       $user = new UnitModel();

       $user->u_name= $request->input('u_name');
       $user->u_status = $request->input('u_status');
      

       $user->save();
       return redirect()->route('u_show');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = new UnitModel();
        $data['user'] = $user->get();
        return view('backend.units.view_units', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = new UnitModel();
        $data['user'] = $user->findorfail($id);
        return view('backend.units.edit_units', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = UnitModel::find($id);

        $user->u_name= $request->input('u_name');
       $user->u_status = $request->input('u_status');

        $user->save();
        return redirect()->route('u_show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = UnitModel::find($id);
        $user->delete();
        return redirect('viewunits');
    }
}
