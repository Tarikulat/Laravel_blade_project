@extends('frontend.layout.header')
      @section('content')


<div class="container-fluid "> 
  <div class="p-3 mb-2 bg-secondary text-white">
 <div class="col-md-12 grid-margin stretch-card">
  
    <div class="card">
      <div class="card-body">
        <h4 class="card-title text-center">Edit Brand</h4>
        <p class="card-description"> </p>
          <form action="{{ route('b_update', $user->id) }}" method="POST">
          @csrf
          @method('put')
          <div class="form-group">
            <label for="exampleInputUsername1">Brand Name</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="b_name" value="{{ $user->b_name}}">
          </div>
          {{-- <div class="form-group">
            <label for="exampleInputEmail1"> status</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="status" name="c_status" value="{{ $user->c_status}}">
          </div> --}}

            <button type="submit" class="btn btn-dark">Submit</button>
    
          </form>
    </div>
    </div>
  </div>
</div>  
 @endsection

  