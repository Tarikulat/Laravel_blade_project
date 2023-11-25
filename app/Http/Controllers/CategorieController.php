<?php

namespace App\Http\Controllers;

use App\Models\CategorieModel;
use Illuminate\Http\Request;

class CategorieController extends Controller
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
        return view('backend.categories.add_categories');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request);
       $user = new CategorieModel();

       $user->c_name= $request->input('c_name');
       $user->c_status = $request->input('c_status');
      

       $user->save();
       return redirect()->route('c_show');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = new CategorieModel();
        $data['user'] = $user->get();
        return view('backend.categories.view_categories', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = new CategorieModel();
        $data['user'] = $user->findorfail($id);
        return view('backend.categories.edit_categories', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = CategorieModel::find($id);

        $user->c_name= $request->input('c_name');
       $user->c_status = $request->input('c_status');

        $user->save();
        return redirect()->route('c_show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = CategorieModel::find($id);
        $user->delete();
        return redirect('viewcategories');
    }
}
