<!-- <form method="POST" enctype="multipart/form-data" action="{{route('product.destroy', $product->id)}}">
    {{method_field('delete') }}
    {{csrf_field()}}
    <div class="modal fade" id="ModalDelete{{$product->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete product
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
</form> -->