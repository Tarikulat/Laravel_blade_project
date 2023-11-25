@extends('frontend.layout.header')
      @section('content')


<div class="container-fluid "> 
  <div class="p-3 mb-2 bg-secondary text-white">
 <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit suppliers</h4>
    
          <form action="{{ route('su_update', $user->suppliers_id) }}" method="POST">
          @csrf
          @method('put')

          <div class="form-group">
            <label for="exampleInputUsername1">suppliers name</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="suppliers_name" value="{{ $user->suppliers_name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">suppliers address</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="suppliers address" name="suppliers_address" value="{{ $user->suppliers_address}}">
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">suppliers phone</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="suppliers phone" name="suppliers_phone" value="{{ $user->suppliers_phone}}">
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">suppliers email</label>
            <input type="email" class="form-control" id="exampleInputUsername1" placeholder="suppliers email" name="suppliers_email" value="{{ $user->suppliers_email}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"> suppliers status</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder=" suppliers status" name="suppliers_status" value="{{ $user->suppliers_status}}">
          </div>

           <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
    </div>
  </div>
</div>  
</div>  
 @endsection