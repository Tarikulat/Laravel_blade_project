<?php

namespace App\Http\Controllers;
use Cart;
use DB;
// use App\Models\Cart;
use Illuminate\Http\Request;

class PurchaseCartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data=array();
        $data['id']=$request->id;
        $data['name']=$request->name;
        $data['qty']=$request->qty;
        $data['weight']=1;
        $data['price']=$request->price;

        // echo "<pre>";
        // print_r($data);

     $add=Cart::add($data);

    if ($add) {
          $notification=array(
            'messege'=>'Product Added',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
     }
     else{
        $notification=array(
            'messege'=>'error',
            'alert-type'=>'success' 
        );
        return Redirect()->back()->with($notification);
     }
    }

/**
     * Update
     */

    public function CartUpdate(Request $request, $rowId)
        
    {
        $qty=$request->qty;
        $update=Cart::update($rowId , $qty);

        if ($update) {
            $notification=array(
              'messege'=>'Update Successfully',
              'alert-type'=>'success'
          );
          return Redirect()->back()->with($notification);
       }
       else{
          $notification=array(
              'messege'=>'error',
              'alert-type'=>'success' 
          );
          return Redirect()->back()->with($notification);
       }
    }
   
    /**
     * Remane
     */

    public function CartRemove($rowId){
        $remove=Cart::remove($rowId);

        if ($remove) {
            $notification=array(
              'messege'=>'Remove Successfully',
              'alert-type'=>'success'
          );
          return Redirect()->back()->with($notification);
       }
       else{
          $notification=array(
              'messege'=>'error',
              'alert-type'=>'success' 
          );
          return Redirect()->back()->with($notification);
       }

       
    }




    public function CreateInvoice(Request $request){

        // Get the contents of the Cart
        $contents = Cart::content();
    
        // Get the customer ID from the request
        $supp_id = $request->supp0003;
    
        // Validate the request data
        $request->validate([
            'supp0003' => 'required',
        ], [
            'supp0003.required' => 'Select A Suppliers First !',
        ]);
    
        // Get customer details from the database based on the customer ID
        $supplier = DB::table('suppliers_models')->where('id', $supp->supp_id)->first();
    
        // Dump and die (dd) to inspect the contents of $contents and $customer
        // dd($customer->customer_name);
        // dd($contents);
    
        return view('backend.purchaseorder.purchase-invoice', compact(['contents','supplier']));
    
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
