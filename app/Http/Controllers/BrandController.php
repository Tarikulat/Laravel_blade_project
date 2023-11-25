<?php

namespace App\Http\Controllers;

use App\Models\BrandModel;
use Illuminate\Http\Request;

class BrandController extends Controller
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
        return view('backend.brands.add_brands');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new BrandModel();

       $user->b_name= $request->input('b_name');
  
      

       $user->save();
       return redirect()->route('b_show');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = new BrandModel();
        $data['user'] = $user->get();
        return view('backend.brands.view_brands', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = new BrandModel();
        $data['user'] = $user->findorfail($id);
        return view('backend.brands.edit_brands', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = BrandModel::find($id);

        $user->b_name= $request->input('b_name');
       

        $user->save();
        return redirect()->route('b_show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = BrandModel::find($id);
        $user->delete();
        return redirect('viewbrands');
    }
}
