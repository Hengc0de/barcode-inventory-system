@include ('partials/head');

<body>

    <!-- ======= Header ======= -->
    @include ('partials/header');

    <!-- ======= Sidebar ======= -->
    @include ('partials/aside');
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add New Product</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Add new product</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Add New Product</h5>
                                @if(session()->has('message'))
                                <div class="alert alert-success align-items-center d-flex justify-content-between">

                                    <div>
                                        {{ session('message') }}

                                    </div>
                                    <div><a style="font-weight: 700;" class="btn btn-success" href="{{url('product/manage_product')}}">Check
                                            product</a></div>

                                </div>
                                @endif
                                @if(session()->has('barcode'))
                             
                                @php
                                $product_code = session('product_code');
                                $id = session('id');
                                @endphp
                                <form action="{{route('product.view_product', $id)}}" method="get">
                                    @csrf
                                    <div class="alert alert-danger align-items-center d-flex justify-content-between">

                                        <div>
                                            {{ session('barcode') }}

                                        </div>


                                        <div><button style="font-weight: 700;" class="btn btn-primary" type="submit">Edit
                                                product {{$product_code}} </button></div>

                                    </div>
                                </form>

                                @endif
                                <!-- Floating Labels Form -->
                                <form class="row g-3" method="post" action="{{route('product.add')}}">
                                    @csrf
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input required type="text" class="form-control" id="floatingName" name="product_name" placeholder="Product Name">
                                            <label for="floatingName">Product Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input required type="number" class="form-control" id="floatingEmail" name="product_price" placeholder="Product Price">
                                            <label for="floatingEmail">Product Price</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" required class="form-control" id="floatingPassword" name="product_qty" placeholder="Product qty">
                                            <label for="floatingPassword">Product qty</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 old_add_category_div">

                                        <div class="form-floating mb-3">

                                            <select class="form-select" required id="floatingSelect" name="category_id" aria-label="Category">
                                                @foreach ($categories as $category)
                                                <option value="{{$category->catid}}">
                                                    {{ $category->category_name}}
                                                </option>
                                                @endforeach
                                            </select>
                                            <label for="floatingSelect">Category</label>

                                        </div>
                                    </div>
                                    <div class="col-md-2 py-2 add_category_btn">
                                        
                                        <a class="btn btn-primary add-category-btn">+</a>
                                    </div>
                                    {{-- <div class="col-md-4 add_category_div">
                                        <div class="form-floating">
                                            <input type="text" required class="form-control" id="floatingPassword" name="new_category" placeholder="New Category Name">
                                            <label for="floatingPassword">New Category Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 py-2 cancel_category_btn">
                                        
                                        <a class="btn btn-danger cancel-category-btn">x</a>
                                    </div> --}}
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">

                                            <select class="form-select" required id="floatingSelect" name="supplier_id" aria-label="Category">
                                                @foreach ($suppliers as $supplier)
                                                <option value="{{$supplier->id}}">
                                                    {{ $supplier->supplier_name}} | {{ $supplier->supplier_company}}
                                                </option>
                                                @endforeach
                                            </select>
                                            <label for="floatingSelect">Supplier</label>
                                        </div>
                                    </div>
                                    <hr>

                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input required type="text" class="form-control" id="floatingcode" name="product_code" placeholder="Product code">
                                            <label for="floatingcode">Product code</label>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </form><!-- End floating Labels Form -->

                            </div>
                        </div>

                    </div>
                </div><!-- End Left side columns -->


            </div>
        </section>

    </main><!-- End #main -->

    @include ('partials/footer');