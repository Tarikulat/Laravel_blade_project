<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SalesOrdersModel;

class SalesorderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
    //     $salesorders = SalesOrdersModel::
    //     join('customer_models','sales_orders_models.salesorder_id','customer_models.id')
    //    -> join('products_models','sales_orders_models.salesorder_id','products_models.product_id')

    //     ->select('sales_orders_models.*','products_models.*','customer_models.customer_name','customer_models.customer_phone','customer_models.customer_address'
    //     )
    //     ->get();
        
 
    //     return view('backend/salesorders/view_sales_order', ['salesorders' => $salesorders]);


    $queryString = $request->product_search;
    $product = DB::table('products_models')
    ->join('categorie_models','products_models.category_id','=','categorie_models.id')
    ->join('brand_models','products_models.brand_id','=','brand_models.id')
    ->select(
        'categorie_models.c_name as categoryName',
        'brand_models.b_name as brandName',
        'products_models.*',
       )->where('product_name', 'LIKE', "$queryString%")->orwhere('category_id', 'LIKE', "$queryString%")->get();
    // return dd($product);

    $customers = DB::table('customer_models')->get();
    $categories = DB::table('categorie_models')->get();

    // dd($customers);
    return view ('backend/salesorders/view_sales_order',compact('product','customers','categories'));






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
