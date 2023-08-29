@include ('partials/head');

<body>

    <!-- ======= Header ======= -->
    @include ('partials/header');

    <!-- ======= Sidebar ======= -->
    @include ('partials/aside');

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Manage Suppliers</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Manage Suppliers</li>
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
                </div>

                @endif
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="card overflow-auto">

                            <div class="card-body">

                                <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-title">All Suppliers </h5>

                                    {{-- <a href="{{url('product/grid_view')}}" class="btn btn-success ">Grid View <i class="bi bi-grid-3x2"></i></a> --}}

                                </div>
                                <table class="table table-borderless datatable">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>

                                            <th scope="col">Supplier Name</th>
                                            <th scope="col">Company</th>
                                            <th scope="col">Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($suppliers as $sup)

                                        <tr  class="align_tr">
                                            <th scope="row">{{$sup->id}}</th>

                                            <td>{{$sup->supplier_name}}</td>
                                            <td>{{$sup->supplier_company}}</td>
                                            <td>
                                                <div class="d-flex gap-2">


                                                    <button class="btn btn-primary" type="button"  data-bs-toggle="modal" data-bs-target="#ModalEdit{{$sup->id}}">Edit</button>
                                                                                            
                                                    <form action="{{route('suppliers.edit')}}" method="post">
                                                        {{-- @method('update') --}}
                                                    @csrf
                                                        <div class="modal fade" id="ModalEdit{{$sup->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                            Edit
                                                                            Supplier
                                                                        </h1>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="hidden" name="id" value="{{$sup->id}}">
                                                                        <div class="col-md-12">
                                                                            <div class="form-floating">
                                                                                <input required type="text" class="form-control" value="{{$sup->supplier_name}}" id="floatingName" name="supplier_name" placeholder="Product Name">
                                                                                <label for="floatingName">Product Name</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-floating">
                                                                                <input required type="text" class="form-control" value="{{$sup->supplier_company}}" id="floatingName" name="supplier_company" placeholder="Product Name">
                                                                                <label for="floatingName">Company</label>
                                                                            </div>
                                                                        </div>
                                                                        <b></b>
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
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalDelete{{$sup->id}}">
                                                        Delete
                                                    </button>
                                                    <form enctype="multipart/form-data" action="{{route('suppliers.destroy', $sup->id)}}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <div class="modal fade" id="ModalDelete{{$sup->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                        <b>{{$sup->supplier_name}}</b>
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
                                            </td>
                                        </tr>

                                        <!-- 
                                    <div class="modal fade" id="ModalDelete" tabindex="-1" role="dialog"
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
                                                    <b></b>
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