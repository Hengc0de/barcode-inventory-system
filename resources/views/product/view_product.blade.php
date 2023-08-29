@include ('partials/head');
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<body>

    <!-- ======= Header ======= -->
    @include ('partials/header');

    <!-- ======= Sidebar ======= -->
    @include ('partials/aside');
    @foreach ($products as $product)
    <main id="main" class="main">

        <div class="pagetitle">

            <h1>
                {{ $product->product_name }}

            </h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
                    <li class="breadcrumb-item active">
                        {{ $product->product_name }}
                        </h1>
                    </li>
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
                                <h5 class="card-title">Edit product</h5>
                                {{-- <p>{{$product->product_code}}</p> --}}
                                
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
                                <div class="alert alert-danger align-items-center d-flex justify-content-between">

                                    <div>
                                        {{ session('barcode') }}

                                    </div>
                                    @php
                                    $product_code = session('product_code');
                                    @endphp

                                    <div><a style="font-weight: 700;" class="btn btn-primary" href="{{url('product/manage_product/')}}">Edit
                                            product {{$product_code}} </a></div>

                                </div>
                                    {{-- <img src="{{url('upload/products/'.$product->product_img)}}" id="product" width="200px" height="200px" alt="Profile" > --}}
                                    @endif
                                <div class="d-flex justify-content-center mb-3">
                                    @if (!empty($product->product_img))
                                    <img src="{{url('upload/products/'.$product->product_img)}}" id="product" width="400px" height="400px" alt="Profile" >
                                    @else
                                    <img src="{{url('upload/noimage.jpg') }}" alt="Profile"  id="product" width="400px" height="400px" >
                      
                                     @endif
                                </div>
                                <!-- Floating Labels Form -->
                                <form class="row g-3" method="post" action="{{route('product.edit')}}" enctype="multipart/form-data">
                                    @csrf
                                    <!-- <img src="" alt=""> -->
                                    <input required type="hidden" class="form-control" id="floatingName" name="id" value="{{$product->id}}" placeholder="Product Name">

                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input required type="text" class="form-control" id="floatingName" name="product_name" value="{{$product->product_name}}" placeholder="Product Name">
                                            <label for="floatingName">Product Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input required type="number" value="{{$product->product_price}}" class="form-control" id="floatingEmail" name="product_price" placeholder="Product Price">
                                            <label for="floatingEmail">Product Price</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" value="{{$product->product_qty}}" required class="form-control" id="floatingPassword" name="product_qty" placeholder="Product qty">
                                            <label for="floatingPassword">Product qty</label>

                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">

                                            <select class="form-select" required id="floatingSelect" name="category_id" aria-label="Category">
                                                @foreach ($category as $cat)
                                                @if ($cat->catid == $product->category_id)
                                                <option selected value="{{$cat->catid}}">
                                                    {{ $cat->category_name}}
                                                </option>
                                                @else
                                                <option value="{{$cat->catid}}">
                                                    {{ $cat->category_name}}
                                                </option>
                                                @endif



                                                @endforeach
                                            </select>
                                            <label for="floatingSelect">Category</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">

                                            <select class="form-select" required id="floatingSelect" name="supplier_id" aria-label="Category">
                                                @foreach ($suppliers as $supplier)
                                                
                                                @if ($supplier->id == $product->supplier_id)
                                                <option selected value="{{$supplier->id}}">
                                                    {{ $supplier->supplier_name}}
                                                </option>
                                                @else
                                                <option  value="{{$supplier->id}}">
                                                    {{ $supplier->supplier_name}}
                                                </option>
                                                @endif



                                                @endforeach
                                            </select>
                                            <label for="floatingSelect">Category</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">

                                        <div class="col-md-8 col-lg-9">
                                            <label for="product">Product Image</label>
                                          
                                          <input name="product_change" type="file" class="form-control" id="productchange" >

                                        </div>
                                      </div>
                                      <div class="text-center mb-3">
                                        @if (!empty($product->product_img))
                                        <img src="{{url('upload/products/'.$product->product_img)}}" id="showproducts" width="100px" height="100px" alt="Profile" >
                                              @else
                                        <img src="{{url('upload/noimage.jpg') }}" alt="Profile"  id="showproducts" width="100px" height="100px" >
                          
                                          @endif
                                      </div>
                                    
                                    <hr>

                                    @foreach ($products as $product)
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input required type="text" class="form-control" id="floatingcode" name="product_code" value="{{$product->product_code}}" placeholder="Product code">
                                            <label for="floatingcode">Product code</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="d-flex   flex-column align-items-center">
                                            {!! DNS1D::getBarcodeHTML("$product->product_code", 'PHARMA') !!}
                                           <p> {{$product->product_code  }}</p>
                                        </div>
                                    </div>

                                    <hr>
         
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Edit</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </form><!-- End floating Labels Form -->

                            </div>
                        </div>

                    </div>
                </div><!-- End Left side columns -->

                <script type="text/javascript">
                    $(document).ready(function(){
                      $('#productchange').change(function(e){
                        var reader = new FileReader();
                        reader.onload = function(e){
                          $('#showproducts').attr('src', e.target.result);
                        }
                          reader.readAsDataURL(e.target.files['0']);
                      });
                    });
                  </script>
            </div>
        </section>
        @endforeach
    </main><!-- End #main -->
    @include ('partials/footer');