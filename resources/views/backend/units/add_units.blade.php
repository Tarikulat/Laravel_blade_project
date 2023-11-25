@extends('frontend.layout.header')
      @section('content')



<div class="container-fluid "> 
  <div class="p-3 mb-2 bg-secondary text-white">
  <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add Unit</h4>
         
            <form form action=" {{ route('u_add') }}" method="POST">
               @csrf
                <div class="form-group">
                  <label for="exampleInputUsername1">Unit name</label>
                  <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="u_name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"> status</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="status" name="u_status">
                </div>
  
                 <button type="submit" class="btn btn-dark">Submit</button>
             </form>
        </div>
    </div>
  </div>
  </div>



@endsection