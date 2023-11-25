@extends('frontend.layout.header')
      @section('content')



<div class="container-fluid "> 
  <div class="p-3 mb-2 bg-secondary text-white">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add products</h4>
        
          <form form action=" {{ route('pro_add') }}" method="POST" enctype='multipart/form-data'>
             @csrf



             <div class="form-group">
              <label for="exampleInputUsername1">Product Name</label>
              <input type="text" class="form-control" id="exampleInputUsername1" placeholder="product name" name="product_name">
            </div>
            <div class="form-group">
              <label for="exampleInputUsername1">Description</label>
              <input type="text" class="form-control" id="exampleInputUsername1" placeholder="description" name="description">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Product Image</label>
              <input type="file" class="form-control" id="exampleInputEmail1" placeholder="product img" name="product_image">
            </div>




              <div class="form-group">
                <label for="exampleInputUsername1">Catagories Name</label> <br>
                <select class="form-control" aria-label="Default select example" name="category_id">
                  <option value="">please Select Categorie</option>
                @foreach ($category as $row)
                <option value="{{$row->id}}" {{old('') == $row->id ? 'selected' : '' }}>{{$row->c_name}}</option>
                @endforeach
                </select>
              </div>

             

              <div class="form-group">
                <label for="exampleInputUsername1">Brand Name</label> <br>
                <select class="form-control" aria-label="Default select example" name="brand_id">
                  <option value="">please Select Brand</option>
                @foreach ($brand as $row)
                <option value="{{$row->id}}" {{old('') == $row->id ? 'selected' : '' }}>{{$row->b_name}}</option>
                @endforeach
                </select>
              </div>





              {{-- <div class="form-group">
                <label for="exampleInputEmail1">Unit Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="unit name" name="unit_id">
                <option value="">please Select Unit</option>
                @foreach ($unit as $row)
                <option value="{{$row->id}}" {{old('') == $row->id ? 'selected' : '' }}>{{$row->u_name}}</option>
                @endforeach
              </div> --}}


              <div class="form-group">
                <label for="exampleInputUsername1">Unit Name</label> <br>
                <select class="form-control" aria-label="Default select example" name="unit_id">
                  <option value="">please Select Unit</option>
                @foreach ($unit as $row)
                <option value="{{$row->u_name}}" {{old('') == $row->id ? 'selected' : '' }}>{{$row->u_name}}</option>
                @endforeach
                </select>
              </div>

              
              <div class="form-group">
                <label for="exampleInputEmail1">Selling Price</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="selling price" name="selling_price">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Buying Price</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="buying price" name="buying_price">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Quantity</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="quantity" name="quantity">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">SKU</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="sku" name="sku">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Product Status</label>
                <select name="product_status" id="recipient-name" class="form-control">
                  <option value="Active">Active</option>
                  <option value="0">Block</option>
              </select>
                {{-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="product status" name="product_status"> --}}
              </div>

               <button type="submit" class="btn btn-dark">Submit</button>
           </form>
      </div>
  </div>
</div>
</div>
</div>




@endsection