@extends('frontend.layout.header')
      @section('content')

<div class="container-fluid "> 
  <div class="p-3 mb-2 bg-secondary text-white">
 <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Categories</h4>
        
          <form action="{{ route('pro_update', $user->product_id) }}" method="POST">
          @csrf
          @method('put')
          <div class="form-group">
            <label for="exampleInputUsername1">Catagories Name</label> <br>
            <select class="form-control" aria-label="Default select example" name="category_id">
              <option value="">please Select Categorie</option>
            @foreach ($category as $row)
            <option value="{{$row->category_id}}" {{$user->category_id == $row->id ? 'selected' : '' }}>{{$row->c_name}}</option>
            @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Brand Name</label> <br>
            <select class="form-control" aria-label="Default select example" name="category_id">
              <option value="">please Select brand</option>
            @foreach ($brand as $row)
            <option value="{{$row->brand_id}}" {{$user->brand_id == $row->id ? 'selected' : '' }}>{{$row->b_name}}</option>
            @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Product Name</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="product name" name="product_name" value="{{ $user->product_name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Description</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="description" name="description" value="{{ $user->description}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Product Image</label>
            <input type="file" class="form-control" id="exampleInputEmail1" placeholder=" Customer status" name="product_image" value="{{ $user->product_image}}">
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Unit Name</label> <br>
            <select class="form-control" aria-label="Default select example" name="category_id">
              <option value="">please Select brand</option>
            @foreach ($unit as $row)
            <option value="{{$row->unit_id}}" {{$user->unit_id == $row->id ? 'selected' : '' }}>{{$row->u_name}}</option>
            @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Selling Price</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" Customer status" name="selling_price" value="{{ $user->selling_price}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Buying Price</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" Customer status" name="buying_price" value="{{ $user->buying_price}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">quantity</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" quantity" name="buying_price" value="{{ $user->quantity}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">SKU</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" Customer status" name="sku" value="{{ $user->sku}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Product Status</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" Customer status" name="product_status" value="{{ $user->product_status}}">
          </div>

           <button type="submit" class="btn btn-dark">Submit</button>
    
          </form>
    </div>
    </div>
  </div>
</div>  
 @endsection

  