@extends('dashboard')
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

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Sales Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                           

                            <div class="card-body">
                                <h5 class="card-title">Sales </h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$sum_of_sale}} Products</h6>
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
                                <h5 class="card-title">Revenue </h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-dollar"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>${{$grand_total}}</h6>
                                        {{-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> --}}

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Revenue Card -->

                    <!-- Customers Card -->
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">

                           
                            <div class="card-body">
                                <h5 class="card-title">Customers</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$customer_count}}</h6>
                                        {{-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span> --}}

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div><!-- End Customers Card -->

                    <!-- Reports -->
                    <div class="col-6">
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
                                <h5 class="card-title">Product List</h5>

                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product name</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">Price</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                        @if ($product->product_qty <= 10 && $product->product_qty > 5)
                                        <tr style="background-color: rgb(237, 213, 103) !important;">
                                            <td  style="background:none"scope="row"><a href="#">{{$product->id}}</a></td>
                                            <td style="background:none">{{$product->product_name}}</td>
                                            <td  style="background:none">{{$product->product_qty}}</td>
                                            <td  style="background:none"><span class="badge bg-success">${{$product->product_price}}</span></td>
                                   
                                            
                                          
                                        </tr>
                                        @elseif ($product->product_qty <= 5)
                                        <tr style="background-color: rgb(189, 24, 57) !important;">
                                            <td  style="background:none"scope="row"><a href="#">{{$product->id}}</a></td>
                                            <td style="background:none">{{$product->product_name}}</td>
                                            <td  style="background:none">{{$product->product_qty}}</td>
                                            <td  style="background:none"><span class="badge bg-success">${{$product->product_price}}</span></td>
                                   
                                            
                                          
                                        </tr>
                                        @else
                                        <tr >
                                            <td  style="background:none"scope="row"><a href="#">{{$product->id}}</a></td>
                                            <td style="background:none">{{$product->product_name}}</td>
                                            <td  style="background:none">{{$product->product_qty}}</td>
                                            <td  style="background:none"><span class="badge bg-success">${{$product->product_price}}</span></td>
                                   
                                            
                                          
                                        </tr>
                                        @endif
          
                                     
                                        @endforeach

                                       
                                    </tbody>
                                </table>
                                <a href="{{route('product.index')}}" class="btn-primary btn ">View All Product</a>

                            </div>

                        </div>
                    </div><!-- End Recent Sales -->
                    <div class="col-6">
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
                                <h5 class="card-title">Product List</h5>

                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Category name</th>
                                            <th scope="col">Description</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                        <tr>
                                            <th scope="row"><a href="#">{{$category->catid}}</a></th>
                                            <td>{{$category->category_name}}</td>
                                            <td>{{substr($category->description, 0, 15)}}...</td>
                                   
                                            
                                          
                                        </tr>
                                     
                                        @endforeach

                                       
                                    </tbody>
                                </table>
                                <a href="{{route('category.index')}}" class="btn-primary btn ">View All Category</a>

                            </div>

                        </div>
                    </div><!-- End Recent Sales -->
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
                                <h5 class="card-title">Recent Sales</h5>

                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Product name</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ordered_products as $o_p)
                                        <tr>
                                            <th scope="row"><a href="#">{{$o_p->order_id}}</a></th>
                                            <td>{{$o_p->product_name}}</td>
                                            <td>{{$o_p->product_qty}}</td>
                                            <td>{{$o_p->product_total}}</td>
                                            
                                            <td><span class="badge bg-success">Paid</span></td>
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

                            <div class="card-body pb-0">
                                <h5 class="card-title">Top Selling <span>| Today</span></h5>

                                <table class="table table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Preview</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Sold</th>
                                            <th scope="col">Revenue</th>
                                        </tr>
                                    </thead>
                                    <H1>Under progress...</H1>
                                    <img src="{{asset('upload/roadwork.png')}}" alt="">
                                    {{-- <tbody>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas
                                                    nulla</a></td>
                                            <td>$64</td>
                                            <td class="fw-bold">124</td>
                                            <td>$5,828</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Exercitationem similique
                                                    doloremque</a></td>
                                            <td>$46</td>
                                            <td class="fw-bold">98</td>
                                            <td>$4,508</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Doloribus nisi
                                                    exercitationem</a></td>
                                            <td>$59</td>
                                            <td class="fw-bold">74</td>
                                            <td>$4,366</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum
                                                    error</a></td>
                                            <td>$32</td>
                                            <td class="fw-bold">63</td>
                                            <td>$2,016</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                                            <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus
                                                    repellendus</a></td>
                                            <td>$79</td>
                                            <td class="fw-bold">41</td>
                                            <td>$3,239</td>
                                        </tr>
                                    </tbody> --}}
                                </table>

                            </div>

                        </div>
                    </div><!-- End Top Selling -->

                </div>
            </div><!-- End Left side columns -->

           

        </div>
    </section>

</main><!-- End #main -->
@endsection
