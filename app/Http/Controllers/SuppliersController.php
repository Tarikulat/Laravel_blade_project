<?php

namespace App\Http\Controllers;
use App\Models\SuppliersModel;
use Illuminate\Http\Request;

class SuppliersController extends Controller
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
        return view('backend.suppliers.add_suppliers');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new SuppliersModel();

        $user->suppliers_name= $request->input('suppliers_name');
        $user->suppliers_address= $request->input('suppliers_address');
        $user->suppliers_phone= $request->input('suppliers_phone');
        $user->suppliers_email= $request->input('suppliers_email');
        $user->suppliers_status= $request->input('suppliers_status');
       
 
        $user->save();
        return redirect()->route('su_show');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = new SuppliersModel();
        $data['user'] = $user->get();
        return view('backend.suppliers.view_suppliers', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = new SuppliersModel();
        $data['user'] = $user->findorfail($id);
        return view('backend.suppliers.edit_suppliers', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = SuppliersModel::find($id);

        $user->suppliers_name= $request->input('suppliers_name');
        $user->suppliers_address= $request->input('suppliers_address');
        $user->suppliers_phone= $request->input('suppliers_phone');
        $user->suppliers_email= $request->input('suppliers_email');
        $user->suppliers_status= $request->input('suppliers_status');

        $user->save();
        return redirect()->route('su_show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = SuppliersModel::find($id);
        $user->delete();
        return redirect('viewsuppliers');
    }
}
