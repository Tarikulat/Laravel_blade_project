@extends('frontend.layout.header')
@section('content')
    <div class="bg-primary">
        <section class="">
            <div class="container-fluid">
                <div class="row mb-12">
                    <div class="col-sm-6 text-center">
                        <h1><i class="fa-solid fa-baby- "></i> Create Purchase Orders</h1>
                    </div>
                    <div class="col-sm-6 text-right">
                        <h3 class="pt-3"> {{ date('d-m-y') }}</h3>

                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->

        <section class="content" style="background-color: white">
            <!-- Default box -->
            <div class="container-fluid">
                <div class="card">
                    {{-- <div class="card-header">
                    <div class="card-tools">
                        <div class="input-group input-group" style="width: 250px;">
                            <input type="text" name="table_search" class=" float-right" placeholder="Search">
        
                            <div class="input-group-append">
                              <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                              </button>
                            </div>
                          </div>
                    </div>
                </div> --}}
                    <div class="card-body table-responsive p-0">
                        <div class="row">

                            <div class="col-6" style="background-color: white">
                                <div class="mb-3 row">
                                    <div class="col-7">
                                        <label style="font-size: 30px; padding-left:6px; for="name">suppliers007</label>

                                        @php
                                            $suppliers = DB::table('suppliers_models')->get();
                                        @endphp

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif


                                    </div>



                                    <div class="col-5">
                                        <a href="#" class="btn btn-info text-right" data-toggle="modal"
                                            data-target="#exampleModal" data-whatever="@mdo">New Suppliers </a>
                                    </div>
                                </div>

                                <div>
                                    <div>

                                        {{-- <h5 class="text-center bg-success">Product not Added</h5> --}}
                                        <table class="table">
                                            <thead class="bg-info">
                                                <tr>
                                                    <th class="text-white">Name</th>
                                                    <th class="text-white">Qty</th>
                                                    <th class="text-white">buying_price</th>
                                                    <th class="text-white">Sub Total</th>
                                                    <th class="text-white">Action</th>

                                                </tr>
                                            </thead>
                                            @php
                                                $cart_product = Cart::content();
                                            @endphp
                                            <tbody>
                                                @foreach ($cart_product as $cart)
                                                    <tr>
                                                        <th>{{ $cart->name }}</th>
                                                        <th>
                                                            <form action="{{ url('/purcart-update/' . $cart->rowId) }}"
                                                                method="post">
                                                                @csrf
                                                                <input type="number" name="qty"
                                                                    value="{{ $cart->qty }}" style="width:40px;">

                                                                <button type="submit" class="btn btn-sm btn-success"
                                                                    style="margin-top:-2px;">
                                                                    <i class="fas fa-check"></i></button>

                                                            </form>
                                                        </th>
                                                        <th>{{ $cart->price }}</th>
                                                        <th>{{ $cart->price * $cart->qty }}</th>

                                                        <th><a href="{{ URL::to('/purcart-remove/' . $cart->rowId) }}"><i
                                                                    class="fas fa-trash-alt text-danegr">Delete</i> </a>
                                                        </th>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="pl-4 pricing-footer bg-primary">
                                        <p style="font-size:19px">Quantity :{{ Cart::count() }}</p>
                                        <p style="font-size:19px">Sub Total: {{ Cart::subtotal() }}</p>
                                        <p style="font-size:19px">Vat : {{ Cart::tax() }}</p>
                                        <hr>
                                        <p>
                                            <h2 class="text-white">Total:</h2>
                                            <h1 class="text-white">{{ Cart::total() }}</h1>
                                        </p>

                                        <form method="post" action="{{ url('/purcreate-invoice') }}">
                                            @csrf
                                            {{-- <input type="hidden" name="id" value="{{ $cust->id }}"> --}}
                                            
                                            <div class="mt-3">
                                                <select name="supp0003"class="form-control bg-primary">
                                                    <option disabled="" selected=""> Select a Suppliers</option>
                                                    @foreach ($suppliers as $supp)
                                                        <option value="{{$supp->suppliers_id }}">{{ $supp->suppliers_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-success">Create Invoice</button>
                                            </div> 
                                        </form>
                                    </div>
                                    
                                </div>

                            </div>
                            



                            {{--********* All Product Start --}}

                            <div class="col-6 ">

                                <div class="card-header bg-info">
                                    <div class="card-tools ">
                                        <div
                                            class="input-group input-group d-flex align-items-center justify-content-between">
                                            <form action="{{ route('search-product') }}" method="GET" class="d-flex">
                                                @csrf
                                                <input type="text" name="product_search" class=" float-right"
                                                    placeholder="Search">
                                                <input class="btn btn-primary" type="submit" value="search">
                                            </form>

                                            <div class="input-group-append text-right">
                                                <a href="{{ route('search-product') }}" type="submit"
                                                    class="btn btn-success">Refresh
                                                    <i class="fas fa-search"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-hover text-nowrap bg-primary text-white">
                                        <thead>
                                            <tr>

                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>Images</th>
                                                <th>Brand</th>
                                                <th>quantity</th>

                                                <th>Buying Price</th>
                                                <th>Seling Price</th>
                                                <th>Code</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($product as $prod)
                                                <tr>
                                                    <form action="{{ url('/add-cart') }}" method="post">
                                                        @csrf

                                                        <input type="hidden" name="id"
                                                            value="{{ $prod->product_id }}">
                                                        <input type="hidden" name="name"
                                                            value="{{ $prod->product_name }}">
                                                        <input type="hidden" name="qty" value="1">

                                                        <input type="hidden" name="price"
                                                            value="{{ $prod->selling_price }}">


                                                        <td>{{ $prod->product_name }}</td>

                                                        <td>{{ $prod->categoryName }}</td>
                                                        <td>
                                                            <img src="{{ asset('/uploads/' . $prod->product_image) }}"
                                                                style="height: 40px;width:50px;">
                                                        </td>
                                                        <td>{{ $prod->brandName }}</td>
                                                        <td>{{ $prod->quantity }}</td>
                                                        <td>{{ $prod->buying_price }}</td>
                                                        <td>{{ $prod->selling_price }}</td>
                                                        <td>{{ $prod->sku }}</td>
                                                        <td><button type="submit" class="btn btn-info btn-sm"><i
                                                                    class="fas fa-plus-square"></i></button></td>
                                                    </form>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.card -->




                {{-- customers add modal  --}}
                <div class="col-md-6">
                    <form action="{{ route('su_add') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="">
                                        <h4 class="modal-title bg-info text-center " id="exampleModalLabel"> Add New
                                            Suppliersr</h4>
                                    </div>

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="modal-body bg-primary">
                                        {{-- <form method="post" action="{{ route('customers.store') }}"> --}}

                                        <div class="form-group ">
                                            <label for="recipient-name" class="col-form-label">Name : </label>
                                            <input type="text" name="suppliers_name" placeholder="suppliers_name"
                                                class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Email : </label>
                                            <input type="text" name="suppliers_email" placeholder="Email"
                                                class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Phone Number : </label>
                                            <input type="text" name="suppliers_phone" placeholder=" suppliers phoner"
                                                class="form-control" id="recipient-name">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Address : </label>
                                            <input type="text" name="suppliers_address" placeholder="Address"
                                                class="form-control" id="recipient-name">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-2">
                                                <label for="status" class="col-form-label">Status</label>
                                                <select name="customer_status" id="recipient-name" class="form-control">
                                                    <option value="1">Active</option>
                                                    <option value="0">Block</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>

                    </form>
                    </form>
                </div>

            </div>
    </div>
    </div>
    {{-- </div> --}}



    </section>
@endsection
@section('customJs')
    <script></script>




    </div>
@endsection
