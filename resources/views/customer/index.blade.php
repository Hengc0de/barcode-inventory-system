@extends('customer/dashboard')
@section('admin')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-12 ">
                
                <div class="card">
                    <div class="card-body  " style="padding: 50px !important;">

                        <h1 >Your credit: ${{$credit }} </h1>
                        <p class="mb-5 text-secondary">Every 100$ spent you will receive 5$ credit</p>
                        <div class="progress">
                            <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width:{{$credit_left}}%" aria-valuenow="{{$credit_left}}" aria-valuemin="0" aria-valuemax="100">${{$credit_left}}</div>
                          </div>
                    </div>
               
                </div>
       
            </div>
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                           

                            <div class="card-body">
                                <h5 class="card-title">Bought</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$sum_of_bought_product}} Products</h6>
                                        {{-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->

                    <!-- Revenue Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                           

                            <div class="card-body">
                                <h5 class="card-title">Total Spent </h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$sum_of_bought_price}}$</h6>
                                        {{-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->


                  
                    <!-- Reports -->
                    
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
{{-- 
                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                {{-- <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"> --}}
                                    {{-- <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li> --}}

                                    {{-- <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li> --}}
                                {{-- </ul>
                            </div> --}} 

                            <div class="card-body">
                                <h5 class="card-title">Recent Purchase</h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product name</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">Price</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ordered_product as $odp) 
                                            <tr>
                                                <td>{{$odp->product_id}}</td>
                                                <td>{{$odp->product_name}}</td>
                                                <td>{{$odp->product_qty}}</td>
                                                <td>{{$odp->product_price}}</td>
                                            </tr>
                                        @endforeach

                                       
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Recent Sales -->

                    <!-- Top Selling -->
                    <div class="col-12">
                        <div class="card top-selling overflow-auto">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>



                </div>
            </div><!-- End Left side columns -->

           

        </div>
    </section>

</main><!-- End #main -->
@endsection
