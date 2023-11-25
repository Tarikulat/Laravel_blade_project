<?php

namespace App\Http\Controllers;
use Cart;
use DB;
// use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
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

//     public function CreateInvoice(Request $request){

//         // $contents=Cart::content();
//         //   $cust_id=$request->cust0003;
     
//             // echo"<pre>";
//             // print_r($contents);
//             // echo"<br>";

//             // print_r($cust_id);


// /*---------------validation---------------------*/

//             $request->validate([
//                 'cust0003'=>'required',
//             ],

//             [
//                 'cust0003.required' => 'Select A Customer First !',
//             ]);
//             $cust_id=$request->cust0003;
//             $customer=DB::table('customer_models')->where('id',$cust_id)->find();
//             $contents=Cart::content();


//             // return view('backend.salesorders.create-invoice');

//             dd($contents, $customer);


//             // echo"<pre>";
//             // print_r($contents);

//     }

public function CreateInvoice(Request $request){

    // Get the contents of the Cart
    $contents = Cart::content();

    $total =Cart::total();

    // Get the customer ID from the request
    $cust_id = $request->cust0003;

    // Validate the request data
    $request->validate([
        'cust0003' => 'required',
    ], [
        'cust0003.required' => 'Select A Customer First !',
    ]);

    // Get customer details from the database based on the customer ID
    $customer = DB::table('customer_models')->where('id', $cust_id)->first();

    // Dump and die (dd) to inspect the contents of $contents and $customer
    // dd($customer->customer_name);
    // dd($contents);

    return view('backend.salesorders.create-invoice', compact(['contents','customer','total']));

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
