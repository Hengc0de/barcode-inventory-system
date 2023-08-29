@include ('partials/head');

<body>

    <!-- ======= Header ======= -->
    @include ('partials/header');

    <!-- ======= Sidebar ======= -->
    @include ('partials/aside');

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Manage Products</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Manage Products</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                @if(session()->has('message'))
                <div class="alert alert-success align-items-center d-flex justify-content-between">

                    <div>
                        {{ session('message') }}

                    </div>
                    <div><a style="font-weight: 700;" class="btn btn-success" href="{{url('product/add_product')}}">Add
                            new
                            product</a></div>

                </div>
                @endif
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="card overflow-auto">

                            <div class="card-body">

                                <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">All products </h5>

                                    <a href="{{url('product/manage_product')}}" class="btn btn-success ">Table View</a>

                                </div>
                                <div class="grid_view" style="">
                                    @foreach ($products as $product)
                                    <div class="card">
                                        @if (!empty($product->product_img))
                                        <img src="{{url('upload/products/'.$product->product_img)}}" id="showAvatar" alt="Profile"class="card-img-top">
                                              @else
                                        <img src="{{url('upload/noimage.jpg') }}" alt="Profile"  id="showAvatar" class="card-img-top">
                          
                                          @endif
                                        <div class="card-body">
                                          <h5 class="card-title">{{$product->product_name}}</h5>
                                          <p class="card-text"><strong>Qty: </strong>{{$product->product_qty}} </p>
                                          <p class="card-text"><strong>Price: </strong>{{$product->product_price}}$ </p>
                                          <p class="card-text"><strong>Product Code: </strong> {!! DNS1D::getBarcodeHTML($product->product_code, 'PHARMA') !!}{{$product->product_code}} </p>
                                        </div>
                                        <div class="d-flex grid_button justify-content-between align-items-center p-5">

                                                                                            
                                            <form action="{{route('product.view_product', $product->product_code)}}" method="get">
                                            @csrf
                                                <button class="btn btn-primary" type="submit">Edit</button>
                                            </form>
                                            <a href="{{url('stock_product')}}" class="btn btn-success">Stock in</a>

                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalDelete{{$product->id}}">
                                                Delete
                                            </button>
                                            
                                            <form enctype="multipart/form-data" action="{{route('product.destroy', $product->id)}}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <div class="modal fade" id="ModalDelete{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                    Delete
                                                                    product
                                                                </h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">Are you sure you want to delete
                                                                <b>{{$product->product_name}}</b>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-danger">Save
                                                                    changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                      </div><!-- End Card with an image on top -->
                                      
                                    @endforeach
                                </div>
                                <!-- small modal -->
                            </div>
                        </div>

                        <script>
                            $('table[data-form="deleteForm"]').on('click', '.form-delete', function(e) {
                                e.preventDefault();
                                var $form = $(this);
                                $('#confirm').modal({
                                        backdrop: 'static',
                                        keyboard: false
                                    })
                                    .on('click', '#delete-btn', function() {
                                        $form.submit();
                                    });
                            });
                        </script>

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->

            </div><!-- End Right side columns -->


        </section>

    </main><!-- End #main -->

    @include ('partials/footer');