<?php

namespace App\Http\Controllers;
use App\Models\CategorieModel;
use App\Models\ProductsModel;
use App\Models\BrandModel;
use App\Models\UnitModel;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        $data['category'] = CategorieModel::get();
        $data['brand'] = BrandModel::get();
        $data['unit'] = UnitModel::get();
        return view('backend.products.add_products',$data);

    }

    /**
     * Store a newly created resource in storage.
     */

    public function product(){
        $data['category'] = categorie::orderBy('id' ,'DESC')->get();
        $data['brand'] = brand::orderBy('id' ,'DESC')->get();
        $data['unit'] = unit::orderBy('id' ,'DESC')->get();

    }



    public function store(Request $request)
    {

     
        

        //  dd($request);
       $user = new ProductsModel();

       $user->category_id= $request->input('category_id');
       $user->brand_id = $request->input('brand_id');
       $user->product_name = $request->input('product_name');
       $user->description = $request->input('description');
    //    $user->product_image =$request->input('product_image'); 
       $user->unit_id = $request->input('unit_id');
       $user->selling_price = $request->input('selling_price');
       $user->buying_price = $request->input('buying_price');
       $user->quantity = $request->input('quantity');
       $user->sku = $request->input('sku');
       $user->product_status = $request->input('product_status');

       $image =$request->product_image;
     $imageName = time().'.'.$image->getClientOriginalExtension();
     $request->product_image->move('uploads',$imageName);
     $user->product_image= $imageName;
      

       $user->save();
       return redirect()->route('pro_show');
    }
    
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = new ProductsModel();
        $data['user'] = $user
        ->join('categorie_models','products_models.category_id','=','categorie_models.id')
        ->join('brand_models','products_models.brand_id','=','brand_models.id')
        ->select(
        'categorie_models.c_name',
        'brand_models.b_name',
        'products_models.*',
       )
        ->get();
        // return dd($user);
        return view('backend.products.view_products', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($product_id)
    {        
        $data['category'] = CategorieModel::get();
        $data['brand'] = BrandModel::get();
        $data['unit'] = UnitModel::get();
        $user = new ProductsModel();
        $data['user'] = $user->find($product_id);
        return view('backend.products.edit_products', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = ProductsModel::find($id);

        $user->category_id= $request->input('category_id');
        $user->brand_id = $request->input('brand_id');
        $user->product_name = $request->input('product_name');
        $user->description = $request->input('description');
        $user->product_image = $request->input('imageName');
        $user->unit_id = $request->input('unit_id');
        $user->selling_price = $request->input('selling_price');
        $user->buying_price = $request->input('buying_price');
        $user->quantity = $request->input('quantity');
        $user->sku = $request->input('sku');
        $user->product_status = $request->input('product_status');
       
 
        $user->save();
        return redirect()->route('pro_show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = ProductsModel::find($id);
        $user->delete();
        return redirect('viewproducts');
    }
}

