
@extends('frontend.layout.header')
      @section('content')

<div class="container-fluid ">
  
<div class="col-md-12 grid-margin stretch-card">
    <div class="card ">
      <div class="p-3 mb-2 bg-info text-dark">
      <div class="card-body">
        <h4 class="card-title text-dark">Add Customers</h4>
         
          <form form action=" {{ route('cu_add') }}" method="POST">
             @csrf
              <div class="form-group">
                <label for="exampleInputUsername1">Customer name</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="customer_name">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Customer address</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Customer address" name="customer_address">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Customer phone</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Customer phone" name="customer_phone">
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1">Customer email</label>
                <input type="email" class="form-control" id="exampleInputUsername1" placeholder="Customer email" name="customer_email">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1"> Customer status</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" Customer status" name="customer_status">
              </div>

               <button type="submit" class="btn btn-dark">Submit</button>
           </form>
      </div>
  </div>
</div>
</div>
</div> 


@endsection