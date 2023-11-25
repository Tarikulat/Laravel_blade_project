
@extends('frontend.layout.header')
      @section('content')

{{-- <div class="container-fluid "> 
<div class="col-md-6 table bg-warning text-dark">
    <form action=" {{ route('c_add') }}" method="POST" >
        @csrf
        <div class="mb-10">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="c_name">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">status</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="c_status">
        </div>
       
        <button type="submit" class="btn btn-dark">Submit</button>
    
      </form>
      <br>
</div>
</div> --}}

<div class="container-fluid "> 
  <div class="p-3 mb-2 bg-secondary text-white">

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title ">Add Categories</h4>
         
          <form form action=" {{ route('c_add') }}" method="POST">
             @csrf
              <div class="form-group">
                <label for="exampleInputUsername1">name</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="c_name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1"> status</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="status" name="c_status">
              </div>

               <button type="submit" class="btn btn-dark">Submit</button>
           </form>
      </div>
  </div>
</div>
</div>
</div>


@endsection