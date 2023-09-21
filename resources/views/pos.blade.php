@include ('partials/head');
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css"> --}}
<body>
    @livewireStyles();
    <!-- ======= Header ======= -->
    @include ('partials/header');
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{asset('assets/vendor/jQuery3.7/jQuery.js')}}"></script>

    <!-- ======= Sidebar ======= -->
    @include ('partials/aside');
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // $('.select').selectpicker();
    
        $(document).ready(function() {
            
    
            $(window ).on("load", function() {
                // var customer_phone_number = $(".customer_phone_number").val();
                // if (customer_phone_number != "Customer Phone Number") {
                //     $(".credit-div").removeClass("d-none");
                //     $(".btn-cancel-credit").removeClass("d-none");
                //     $(".btn-add-credit").addClass("d-none");

                // }else{
                //     $(".credit-div").addClass("d-none");
                //     $(".btn-cancel-credit").addClass("d-none");
                //     $(".btn-add-credit").removeClass("d-none");
                // };
            

                setTimeout(()=> {
                    var check_grand = $('.grand_total').val();
                if (check_grand <= 0){
            
                    $(".btnsave").addClass('disabled');
                }else if (check_grand>0) {
                    $(".btnsave").removeClass('disabled');
                }
                }
                ,500);


                $(".form_select").focus();
                var new_grand_total = 0.0;
                $('.product_total').not(":last").each(function(){
                    new_grand_total += parseFloat(this.value);
                    //  grand_total += $(this).val() / 10;
                });
               
                var grand_total = $('.grand_total').val(new_grand_total);
            });
            
            $("#add").click(function() {
    
    
                $("#addeven").modal("show");
    
    
            });
            // get all values from element form
            $("#btnsave").click(function() {
                var username = $("#txtusername").val();
                var userpassword = $("#txtuserpassword").val();
                var status = $("#slstatus").val();
                // alert(username+""+userpassword+""+status+"")
                if (username == "" || userpassword == "") {
                    $("#red").html("Empty user or password");
                    $("#red").css({
                        color: "red"
                    })
                } else {
                    $.post('/addcategory', {
                        txtuser: username,
                        txtpass: userpassword,
                        slstatus: status
                    }, function(result) {
    
                        Swal.fire(result);
                    });
                }
            });
            // get id from html
            $("#tbluser tr").on("click", function() {
                var current_row = $(this).closest("tr")

            });


            // for create add new
            $('#add_more').click(function() {
                $('#bodycat').append(
                    '<tr><td><input type="text" name="product_name" class="product_name form-control"></td><td><input type="number" name="product_qty"  class="product_qty form-control"></td><td><input type="number" name="product_price" class="product_price form-control"></td><td><input type="number" name="product_discount" class="product_discount form-control"></td><td><input type="number" name="product_total" class="product_total form-control"></td><td><a href="#" class="remove btn btn-danger" >Remove</a></a></tr>'
                    );
                //alert("testing");


    
            });
            $("#tbladdcat").on("click", ".remove", function() {

                setTimeout(()=> {
                    var check_grand = $('.grand_total').val();
                if (check_grand <= 0){
            
                    $(".btnsave").addClass('disabled');
                }else if (check_grand>0) {
                    $(".btnsave").removeClass('disabled');
                }
                 }
                ,500);

                var product_total = $(this).closest("tr").find('.product_total').val();
                // alert(product_total);
                 
             
                var grand_total = $('.grand_total').val();
                var new_grand_total =  grand_total - product_total;

               
                var grand_total = $('.grand_total').val(new_grand_total);
                //var current_row = $(this).closest("tr");
                var row_id = $(this).closest("tr").find('.row_id').attr('value');
                // alert(row_id);
                $(this).closest("tr").remove();
                // alert("test");
                $.post('/remove', {
                        'row_id': row_id,

                    }, function(result) {
                   if(result==1){
                        alert("okay");
                   }
    
                    });
                
            });

            $(".product_qty").on("change paste keyup",function(){

                var product_total = $(this).closest("tr").find('.product_total').val();
                // alert(product_total);
                 var product_qty = $(this).closest("tr").find('.product_qty').val();
                 var product_discount = $(this).closest("tr").find('.product_discount').val();
                 var product_price = $(this).closest("tr").find('.product_price').attr('value');
                 if (product_discount != 0){
                
                    var product_discount_new = (product_discount / 100);
                    product_discount_newer = (product_qty * product_price) * product_discount_new;
                    product_total_new = (product_qty * product_price) - product_discount_newer;
                   
                 }
                 else {
                    product_total_new = product_qty * product_price;
                 }
                 
                 
                var product_total = $(this).closest("tr").find('.product_total').val(product_total_new);
               var new_grand_total = 0.0;
                $('.product_total').not(":last").each(function(){
                    new_grand_total += parseFloat(this.value);
                    //  grand_total += $(this).val() / 10;
                });
               
                var grand_total = $('.grand_total').val(new_grand_total);

                // $('.product_total').each(function (index, element){
                //     grand_total = $(this).val() + grand_total;
                // })

            })
            $(".product_discount").on("change paste keyup",function(){


                var product_total = $(this).closest("tr").find('.product_total').val();
                // alert(product_total);
                 var product_qty = $(this).closest("tr").find('.product_qty').val();
                 var product_discount = $(this).closest("tr").find('.product_discount').val();
                 var product_price = $(this).closest("tr").find('.product_price').attr('value');
                 if (product_discount != 0){
                
                    var product_discount_new = (product_discount / 100);
                    product_discount_newer = (product_qty * product_price) * product_discount_new;
                    product_total_new = (product_qty * product_price) - product_discount_newer;
                   
                 }
                 else {
                    product_total_new = product_qty * product_price;
                 }
                var product_total = $(this).closest("tr").find('.product_total').val(product_total_new);
                var new_grand_total = 0.0;
                $('.product_total').not(":last").each(function(){
                    new_grand_total += parseFloat(this.value);
                    //  grand_total += $(this).val() / 10;
                });
               
                var grand_total = $('.grand_total').val(new_grand_total);
            })

            $(document).ready(function(){
                $(".form_select").on("change",function(){
                    var check_grand = $('.grand_total').val();
                if (check_grand <= 0){
            
                    $(".btnsave").addClass('disabled');
                }else if (check_grand>0) {
                    $(".btnsave").removeClass('disabled');
                }
                var product_id = $(this).closest("tr").find('.product_id').val();
                // alert(product_total);
                var product_qty = $(this).closest("tr").find('.product_qty').val();
                var newproduct_qty = product_qty + 1;

               
                 $.post('/add_to_cart', {
                       'barcodeproduct_id':product_id,
                       'barcodeproduct_qty':newproduct_qty,
                  }, function(result) {
                 if(result==1){
                  window.location.href="{{ route('pos.index') }}";
             

                  }
                 
                });
                window.location.href="{{route('pos.index')}}";

            })
            })
  
            $(".btn-use-credit").on('click', function(){
                $(".credit-div").removeClass("d-none");
                    $(".btn-cancel-credit").removeClass("d-none");
                    $(this).addClass("d-none");
            });

            // fro create add new
            $(document).ready(function() {
                $("#btnsaverow").click(function() {

                    var customer_phone_number= $('.customer_phone_number').val();
                    var grand_total= $('.grand_total').val();
                    var product_id= $('.product_id').map(function() {
                        return $(this).val();
                    }).get();
                    
                     var product_name= $('.product_name').map(function() {
                        return $(this).val();
                    }).get();
                    // for create value now in form
                    var product_qty = $('.product_qty').map(function() {
                       
                        
                            return $(this).val();

                        
                    }).get();
                    // for values for this product_price
                    var product_price = $('.product_price').map(function() {
                        return $(this).val();
                    }).get();
                    var product_discount = $('.product_discount').map(function() {
                        return $(this).val();
                    }).get();
                    // for a sing values
                    var product_total = $('.product_total').map(function() {
                        return $(this).val();
                    }).get();
                    var credit_used = $('.credit_used').val();

                    if ($(".customer_phone_number").val() == '' || $(".customer_phone_number").val() == "Customer Phone Number"){
                        alert('Please fill out customer phone number');
                        return;
                    }
                    $.post('/create_order', {
                      
                        'dbconcustomer_phone_number':customer_phone_number,
                        'dbcongrand_total':grand_total,
                        'dbconproduct_id[]':product_id,
                        'dbconproduct_name[]': product_name,
                        'dbconproduct_qty[]': product_qty,
                        'dbconproduct_price[]': product_price,
                        'dbconproduct_discount[]': product_discount,
                        'dbconproduct_total[]': product_total,
                        'dbconcredit_used': credit_used,
                        

                    }, function(result) {
                   if(result==1){
                    
                    alert('Your order has been created');
                    window.location.assign("/pos" );


                   }else{
                    window.location.assign("/fetch_credit/not_enough/" + result);

                   }
                    
                  
                   
                   
                    });
                    



                });
            });
        })
        /// dom
        //  $(document).ready(function(){
        //      $("#txtproduct_name").change(function(){
        //           var txtuserchang =  $("#txtproduct_name").val();
        //           var txtproid= "<input type='text' class='txtproid'>";
        //           var txtqty= "<input type='text' class='txtqty'>";
    
        //       $("#add_row").append('<tr><td>' +txtproid+'</td><td>' +txtqty+'</td></tr>');
        //      $.post('/addcategory', {
        //               pushcontroller:txtuserchang
        //              }, function(result) {
        //                 alert(result);
        //            });
        //      alert(txtuserchang);
        //     })
        //     $("#tblpo").on("change",".txtqty", function(){
        //         var current_row = $(this).closest('tr');
        //     })
        //  })
    </script>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>POS</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
                    <li class="breadcrumb-item active">POS</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
           
                 @if(session()->has('message'))
                <div class="alert alert-success align-items-center d-flex justify-content-between">

                    <div>
                        {{session('message') }}
                    </div>
                </div> 

                 @endif 
                @if(session()->has('remove'))
                <div class="alert alert-success align-items-center d-flex justify-content-between">

                    <div>
                        {{ session('remove') }}
                    </div>
                </div>

                @endif
                @if(session()->has('error_add_to_cart'))
                <div class="alert alert-danger align-items-center d-flex justify-content-between">

                    <div>
                        {{ session('error_add_to_cart') }}
                    </div>
                </div>

                @endif
                @if(session()->has('credit'))
                <div class="alert alert-danger align-items-center d-flex justify-content-between">

                    <div>
                        {{ session('credit') }}
                    </div>
                </div>

                @endif
                <!-- Left side columns -->
    
<div class="row">
    <div class="col-xxl-7">
        <section class="section">
            
             {{-- ({{\Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}) --}}
                <div class="card">
                    <div class="card-body">
                    <h1 class="card-title">Create Order</h1>
                        @if (isset($not_enough))
                        <div class="alert alert-danger align-items-center d-flex justify-content-between">

                            <div>
                                {{$not_enough}}
                            </div>
                        </div>
                        @endif
                    <!-- General Form Elements thon -->
                    {{-- <div align="right"><a href="#" id="add_more" class="btn col-2 btn-primary ">Add</a></div><br> --}}
                    <table class="table table-bordered" id="tbladdcat">
                        <thead>
                        <tr>
                            <td>Product name</td>
                            <td>Qty</td>
                            <td>Price</td>
                            <td>Dis%</td>
                            <td>Total</td>
                            {{-- <td><a href="#" id="add_more" class="btn btn-primary col-12 ">Add</a></td> --}}
                           
                        </tr>
                        </thead>
                        <tbody id="bodycat">
                            @foreach ($products as $product)

                            @if ($cart->where('id', $product->id)->count())
                                @foreach ($cart as $item)
                                   @if ($product->id == $item->id)
                              
                                   <tr> 
                                    <td><input type="text" value="{{$product->product_name}}"  name="product_name" class="product_name form-control"></td>
                                        <input type="hidden" class="row_id" value="{{$item->rowId}}" name="row_id">
                                        <input type="hidden" class="product_id" value="{{$product->id}}" name="product_id">
        
                                       
                                 
                                        <td><input type="number" value="{{$item->qty}}"  name="product_qty"  class="product_qty form-control"></td>
                                        
                                        <td><input type="number" value="{{$product->product_price}}" readonly name="product_price" class="product_price form-control"></td>
                                        <td><input type="number" name="product_discount" value="0" placeholder="%"  class="product_discount form-control"></td>
                                        <td><input type="number" readonly name="product_total"  value="{{$product->product_price * $item->qty}}"  class="product_total form-control"></td>
                                        <td><button type="button" class="remove btn btn-danger">Remove</button></td>
                                    </tr>
                                   

                                   @endif
                               
                                    @endforeach
             
                            @endif

                            @endforeach
                        <tr>
                            <td><div class="select"> <select onmouseover="this.focus()"  data-live-search="true"   name="product_id" class="product_id form_select w-100 " id="">
                                <option value="0" selected >Select|Scan Barcode</option>
                                @foreach ($products as $product)
                                <option class="text-sm" value="{{$product->id}}">{{$product->product_code}} | {{$product->product_name}} </option>
                                @endforeach 
                                    </select>
                            </div>
                            </td>
                            <td><input type="number"  name="product_qty"  class="product_qty form-control"></td>
                            <td><input type="number" readonly name="product_price" class="product_price form-control"></td>
                            <td><input type="number" name="product_discount" class="product_discount form-control"></td>
                            <td><input type="number" readonly name="product_total" class="product_total form-control"></td>
                            <td><a href="#" class="remove btn btn-danger" >Remove</a></a></td>
                            
                        </tr>
                            <tr>
                                <td>Grand Total:</td>
                                <td><input type="text" value="0" name="grand_total" class="grand_total form-control"></td>

                            </tr>
                        </tbody>
                    </table>
                    <div class="row ">
                        <div class="col-md-12 mb-5 mt-3 ">
                            @if (isset($used))
                            <button class="btn btn-success btn-use-credit d-none">Use Credit</button>

                            <div class="form-floating credit-div ">
                                <form action="{{route('fetch_credit', '$customer_phone_number')}}" class=" d-flex justify-content-around gap-5" method="GET" > 
                                     @csrf
                                     @if (isset($customer_phone_number))
                                     <input required type="text"  value="{{$customer_phone_number}} " required class=" form-control customer_phone_number" id="floatingName" name="customer_phone_number" placeholder="Customer Phone Number">
                                         
                                     @else
                                     <input required type="text"  value="Customer Phone Number" required class=" form-control customer_phone_number" id="floatingName" name="customer_phone_number" placeholder="Customer Phone Number">
                                         
                                     @endif

                          
 
                                 
                                     <button type="submit" class="btn btn-success btn-check-number">Check Credit</button>
                              </form> 

                              @if (isset($credit))
                                 @if ($credit != "Phone number not found")
                                     <p class="mx-2 my-2 text-success">User available credit is: ${{$credit}}</p>                                         
                                     
                                 @else
                              <p class="mx-2 my-2 text-danger">{{$credit}}</p>                                         
                                     
                                 @endif
                              @endif
                              @if ($credit_found == "true")
                              <div class="form-floating mt-3 ">
                                <input required type="number" value="0" min="0" max="{{$credit}}" required class="form-control credit_used" id="floatingName" name="credit_used" placeholder="Customer Name">
                                <label for="floatingName">Credit used:</label>
                            </div>
                             
                                  
                              @endif


                         </div>
                         <form action="{{route('pos.index')}}">
                             <button type="submit" class=" mt-3 btn btn-danger btn-cancel-credit ">Don't use account</button>

                         </form>
                            @else
                            <button class="btn btn-success btn-use-credit ">Use Credit</button>

                            <div class="form-floating credit-div d-none">
                                <form action="{{route('fetch_credit', '$customer_phone_number')}}" class=" d-flex justify-content-around gap-5" method="get" > 
                                     @csrf
                                     @if (isset($customer_phone_number))
                                     <input required type="text"  value="{{$customer_phone_number}} " required class=" form-control customer_phone_number" id="floatingName" name="customer_phone_number" placeholder="Customer Name">
                                         
                                     @else
                                     <input required type="text"  value="Customer Phone Number" required class=" form-control customer_phone_number" id="floatingName" name="customer_phone_number" placeholder="Customer Name">
                                         
                                     @endif

                          
 
                                 
                                     <button type="submit" class="btn btn-success btn-check-number">Check Credit</button>
                              </form> 

                              @if (isset($credit_found))
                                 @if ($credit != "Phone number not found")
                                     <p class="mx-2 my-2 text-success">User available credit is: ${{$credit}}</p>                                         
                                     
                                 @else
                              <p class="mx-2 my-2 text-danger">{{$credit}}</p>                                         
                                     
                                 @endif
                              @endif
                              @if (isset($credit_found))
                              <div class="form-floating mt-3 ">
                                <input required type="number" value="0" min="0" max="{{$credit}}" required class="form-control credit_used" id="floatingName" name="credit_used" placeholder="Credit used:">
                                <label for="floatingName">Credit used:</label>
                            </div>
                             
                                  
                              @endif

                         </div>
                         <form action="{{route('pos.index')}}">
                             <button type="submit" class=" mt-3 btn btn-danger btn-cancel-credit d-none ">Don't use account</button>

                         </form>
                            @endif
                           




                        </div>

                    </div>
                    <button type="button" class="btn btnsave col-2 btn-primary offset-lg-5 offset-md-5 offset-sm-5 offset-5" id="btnsaverow">Create order</button>
                    </div>
                </div>
            
        </section>
    </div>
        @livewire('product-table')
</div>
            
    </section>

    </main><!-- End #main -->
  {{-- <script>
        $('.select').selectpicker();

  </script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script> --}}

    @include ('partials/footer');
    @livewireScripts();