@extends('frontend.layout.header')
      @section('content')

<div class="container-fluid "> 
  <div class="p-3 mb-2 bg-secondary text-white">

 <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Categories</h4>
   
          <form action="{{ route('c_update', $user->id) }}" method="POST">
          @csrf
          @method('put')
          <div class="form-group">
            <label for="exampleInputUsername1">name</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="c_name" value="{{ $user->c_name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"> status</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="status" name="c_status" value="{{ $user->c_status}}">
          </div>

            <button type="submit" class="btn btn-dark">Submit</button>
    
          </form>
    </div>
    </div>
  </div>
</div>  
</div>  
 @endsection

  