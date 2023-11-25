@extends('frontend.layout.header')
      @section('content')


<div class="container-fluid "> 
  <div class="p-3 mb-2 bg-info text-white">
 <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Customer</h4>
    
          <form action="{{ route('cu_update', $user->customer_id) }}" method="POST">
          @csrf
          @method('put')

          <div class="form-group">
            <label for="exampleInputUsername1">Customer name</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="customer_name" value="{{ $user->customer_name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Customer address</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Customer address" name="customer_address" value="{{ $user->customer_address}}">
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Customer phone</label>
            <input type="number" class="form-control" id="exampleInputUsername1" placeholder="Customer phone" name="customer_phone" value="{{ $user->customer_phone}}">
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Customer email</label>
            <input type="email" class="form-control" id="exampleInputUsername1" placeholder="Customer email" name="customer_email" value="{{ $user->customer_email}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"> Customer status</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" Customer status" name="customer_status" value="{{ $user->customer_status}}">
          </div>

           <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
    </div>
  </div>
</div>  
</div>  
 @endsection