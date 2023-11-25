<?php

namespace App\Http\Controllers;
use App\Models\CustomerModel;
use Illuminate\Http\Request;

class CustomerController extends Controller
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
        return view('backend.customers.add_customers');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // dd($request);
       $user = new CustomerModel();

       $user->customer_name= $request->input('customer_name');
       $user->customer_address= $request->input('customer_address');
       $user->customer_phone= $request->input('customer_phone');
       $user->customer_email= $request->input('customer_email');
       $user->customer_status= $request->input('customer_status');
      

       $user->save();
       return redirect()->route('cu_show');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = new CustomerModel();
        $data['user'] = $user->get();
        return view('backend.customers.view_customers', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $customer_id)
    {
        $user = new CustomerModel();
        $data['user'] = $user->findorfail($customer_id);
        return view('backend.customers.edit_customers', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = CustomerModel::find($id);

        $user->customer_name= $request->input('customer_name');
        $user->customer_address= $request->input('customer_address');
        $user->customer_phone= $request->input('customer_phone');
        $user->customer_email= $request->input('customer_email');
        $user->customer_status= $request->input('customer_status');

        $user->save();
        return redirect()->route('cu_show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = CustomerModel::find($id);
        $user->delete();
        return redirect('viewcustomers');
    }
}
