
    <div class="col-xxl-5">
        <div class="card overflow-auto">
            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title">All products </h5>

                    {{-- <a href="{{url('product/grid_view')}}" class="btn btn-success ">Grid View <i class="bi bi-grid-3x2"></i></a> --}}

                </div>
                <table  class="table table-borderless datatable">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Img</th>
                            <th scope="col">Name</th>
                            
                            <th scope="col">Qty</th>
                            
                            <th scope="col">Code</th>
                            <th scope="col">Add to order</th>
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
                            
                            <td>{{$product->product_qty}}</td>

                            <td> {{$product->product_code  }}</span></td>
                            <td>
                                <div class="d-flex justify-content-around">
                                    <form  action="{{route('cart.add')}}" method="POST">
                                        @csrf
                                        <input  type="number"  value="1" name="qty" class="rounded" style="width:30px">
                                        <input  type="hidden"  value="{{$product->id}}" name="product_id" class="rounded" style="width:50px">
                                        <button type="submit" class="btn btn-success">Add</button>
                                    </form>
                                    
                                </div>
                                <!-- <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="ModalDelete{{$product->id}}">{{__('Delete')}}</a> -->
                            </td>
                        </tr>



                        @endforeach

                    </tbody>
                </table>
                <!-- small modal -->
            </div>
        </div>
    </div>

