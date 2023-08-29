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

                                    <a href="{{url('product/grid_view')}}" class="btn btn-success ">Grid View <i class="bi bi-grid-3x2"></i></a>

                                </div>
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Img</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Qty</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Code</th>
                                            <th scope="col">Supplier</th>
                                            <th scope="col">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)

                                        <tr  class="align_tr">
                                            <th scope="row">{{$product->id}}</th>
                                            <td>                                    @if (!empty($product->product_img))
                                                <img src="{{url('upload/products/'.$product->product_img)}}" id="product" width="50px" height="50px" alt="Profile" >
                                                @else
                                                <img src="{{url('upload/noimage.jpg') }}" alt="Profile"  id="product" width="50px" height="50px" >
                                  
                                                 @endif</td>
                                            <td>{{$product->product_name}}</td>
                                            <td>{{$product->product_price}}$</td>
                                            <td>{{$product->product_qty}}</td>
                                            <td>{{$product->category_name}}</td>
                                            <td> {!! DNS1D::getBarcodeHTML("$product->product_code", 'PHARMA')!!} <span class="text-secondary">{{$product->product_code  }}</span></td>
                                            @foreach ($suppliers as $supplier)
                                            @if ($supplier->id == $product->supplier_id)
                                            <td>{{$supplier->supplier_name}}</td>
                                                
                                            @endif
                                                
                                            @endforeach
                                            <td>
                                                <div class="d-flex justify-content-around">


                                                                                            
                                                    <form action="{{route('product.view_product', $product->id)}}" method="get">
                                                    @csrf
                                                        <button class="btn btn-primary" type="submit">Edit</button>
                                                    </form>
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
                                                <!-- <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="ModalDelete{{$product->id}}">{{__('Delete')}}</a> -->
                                            </td>
      

                                        </tr>

                                        <!-- 
                                    <div class="modal fade" id="ModalDelete{{$product->id}}" tabindex="-1" role="dialog"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">{{__('Product Delete')}}</h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal body">Are you sure you want to delete
                                                    <b>{{$product->id}}</b>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn gray btn-outline-secondary"
                                                        data-dismiss="modal">{{__('Cancel')}}</button>
                                                    <button type="button"
                                                        class="btn btn-outline-danger">{{__('Delete')}}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                        @endforeach

                                    </tbody>
                                </table>
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