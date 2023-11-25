@extends('frontend.layout.header')
      @section('content')

<div class="container-fluid "> 


<div class="col-lg-12 grid-margin stretch-card ">

 <div class="p-3 mb-2 bg-secondary text-white">
    <div class="card"> 
        <div class="card-body bg-gray text-dark">
            <h4 class="card-title">salesorder</h4>
        <table class="table text-white" >
        <thead>
            <tr>
                <th>Id</th>
                  {{-- <th>Product Name</th> --}}
                  <th>Customer Name</th>
                  <th>Customer address</th>
                  <th>Customer Name</th>
                  <th>status</th>
                  <th>Date & Time</th>
                </tr>
              </thead>
              <tbody>
  
               @foreach ($salesorders as $salesorder) 
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  {{-- <td>{{ $salesorder->name }}</td> --}}
                  <td>{{ $salesorder->customer_name}} </td>
                  <td>{{ $salesorder->customer_address}} </td>
                  <td>{{ $salesorder->date }}</td>
                  <td>{{ $salesorder->status }}</td>
           
  
                  <!-- <td>
                      
                          <button class="btn btn-md btn-success me-1 p-1">edit</button>
                      
                        <button class="btn btn-md btn-danger  p-1">delete</button>
                 
                  </td> -->
                </tr>
            @endforeach
        </tbody>
        </table>
        <br>
        </div>
    </div>
</div>
</div>
</div>





@endsection