@extends('frontend.layout.header')
      @section('content')

<div class="container-fluid "> 

  <div class="p-3 mb-2 bg-secondary text-white">
    <div class="col-md-12">
        <form action="{{ route('u_update', $user->id) }}" method="POST">
      @csrf
      @method('put')
          <div class="mb-10">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="u_name" value="{{ $user->u_name}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">status</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="u_status" value="{{ $user->u_status}}">
          </div>
          
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br>
    </div>
 </div>


 {{-- <div class="container-fluid "> 
  <div class="col-md-6 grid-margin stretch-card">
     <div class="card">
       <div class="card-body">
         <h4 class="card-title">Edit form</h4>
         <p class="card-description"> Basic form layout </p>
           <form action="{{ route('u_update', $user->id) }}" method="POST">
           @csrf
           @method('put')
           <div class="form-group">
             <label for="exampleInputUsername1">Unit name</label>
             <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username" name="u_name" value="{{ $user->u_name}}">
           </div>
           <div class="form-group">
             <label for="exampleInputEmail1"> status</label>
             <input type="text" class="form-control" id="exampleInputEmail1" placeholder="status" name="u_status" value="{{ $user->u_status}}">
           </div>
 
             <button type="submit" class="btn btn-dark">Submit</button>
     
           </form>
     </div>
     </div>
   </div>
 </div>  --}}
    @endsection

  