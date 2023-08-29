<?php

namespace App\Http\Controllers;

use App\Models\OrderModel;
use App\Models\OrdersModel;
use App\Models\POSModel;
use App\Models\ProductModel;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProductTableModel;
use function Laravel\Prompts\alert;

class CartController extends Controller
{
    public function add(Request $request){
        $product = ProductModel::find($request->product_id);
        // $product_qty = $product->product_qty;
        Cart::add($product->id, $product->product_name, $request->qty, $product->product_price);
          return redirect()->back()->with('message', 'Successfully added');

        // foreach(Cart::content() as $item){
         
           
        //     if ($item->id == $request->product_id){
        //             if ($item->qty > $product_qty){
        //                  $no_stock = 1;
                        
            
        //             }
        //             else{
        //                 // $have_stock = 1;
        //                 Cart::add($product->id, $product->product_name, $request->qty, $product->product_price);
        //                 // return redirect()->back()->with('message', 'Successfully added' . $item->qty);
        //             }
        //         }
        //     else{
        //         Cart::add($product->id, $product->product_name, $request->qty, $product->product_price);
        //         // return redirect()->back()->with('message', 'Successfully added');
        //     }

        // }
        //  if (isset($no_stock)){
        //     return redirect()->back()->with('error_add_to_cart', 'No stock' );
                
        //  }else{
        //     return redirect()->back()->with('message', 'Successfully added' );

        //  }
        // // else if (isset($have_stock))
        // // {
        // //     Cart::add($product->id, $product->product_name, $request->qty, $product->product_price);
        // //     return redirect()->back()->with('message', 'Successfully added' . $item->qty);
        // // }

    }
       



        
    
    public function add_barcode(Request $request){
        $product_id = $request->barcodeproduct_id;
        
        $product_qty = $request->barcodeproduct_qty;
         $product = ProductModel::find($product_id);

         
        Cart::add($product->id, $product->product_name, $product_qty, $product->product_price);
        // return redirect()->back()->with('message', 'Successfully added');
 
    }
    public function remove(Request $request){
         $rowId = $request->row_id;
         Cart::remove($rowId);
         return redirect()->back()->with('remove', 'Successfully removed');

    }
    public function create_order(Request $rq){
       
         $customer_name = $rq->dbconcustomer_name;
         $grand_total = $rq->dbcongrand_total;
         
         $product_id = $rq->dbconproduct_id;
        $product_name=$rq->dbconproduct_name;
        $product_qty=$rq->dbconproduct_qty;
        $product_price= $rq->dbconproduct_price;
        $product_discount=$rq->dbconproduct_discount;
        $product_total=$rq->dbconproduct_total;
        
         $last = POSModel::latest('order_id')->first();
         $order_id_from_db = $last->order_id;
         $order_id_insert =  $order_id_from_db + 1;
        //  $datas = array();
        //  for($i=0; $i < count($product_name); $i++){
        //     $p_id = ProductTableModel::find($product_id[$i]);
        //     $up_pid = $p_id->product_qty - 1;

        //      $datas = array('product_qty'=>$up_pid);
           
        //   ProductTableModel::where('id', $product_id[$i])->update($datas);
        //  }

        DB::table('pos')->insert(
            ['customer_name' => $customer_name,
            'po_name' => 'Order#' . $order_id_insert,
             'grand_total' => $grand_total,
             'order_id' => $order_id_insert]
        );

        $data = array();
          for($i=0; $i < count($product_name); $i++){
              $data = array('product_name'=>$product_name[$i],'product_qty'=>$product_qty[$i],'product_price'=>$product_price[$i],'product_discount'=>$product_discount[$i],'product_total' => $product_total[$i], 'order_id' => $order_id_insert, 'product_id' => $product_id);
            
           OrderModel::insertOrIgnore($data);
          }
        Cart::destroy();
        // return redirect()->back()->with('message', 'Successfully Created Order');

    }

    

}
