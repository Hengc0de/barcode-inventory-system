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
use App\Models\User;
use App\Models\NotificationModel;

use function Laravel\Prompts\alert;

class CartController extends Controller
{
    public function add(Request $request){

        $product = ProductModel::find($request->product_id);
        $product_qty = $product->product_qty;
        if (Cart::total() > 0){

            foreach(Cart::content() as $item){
         
                
     

                    if ($item->id == $request->product_id){
                            if ($request->qty + $item->qty > $product_qty){
                                 $no_stock = 1;
                                
                   
                           }
                           else if ($request->qty + $item->qty <= $product_qty){
                               $have_stock = 1;
                              
                          }
                           }
                  else {
                    $no_item_in_cart = 1;
                  
       
                  }
       
             }
             if (isset($no_stock)){
                return redirect()->back()->with('error_add_to_cart', 'No stock' );
             }else if (isset($have_stock)){
                Cart::add($product->id, $product->product_name, $request->qty, $product->product_price);
                return redirect()->back()->with('message', 'Successfully added' . $item->qty);
        
             }else if (isset($no_item_in_cart)){

                Cart::add($product->id, $product->product_name, 1, $product->product_price);
                return redirect()->back()->with('message', 'Successfully added');
        
             }
            }
         else {
            Cart::add($product->id, $product->product_name, $request->qty, $product->product_price);
            return redirect()->back()->with('message', 'Successfully added');

         }
         

       
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
       
         $customer_phone_number = $rq->dbconcustomer_phone_number;
         $grand_total = $rq->dbcongrand_total;
         $credit_used = $rq->dbconcredit_used;

         $account = User::where('customer_phone_number', $customer_phone_number)->first();
         if (!$account){
            $credit_used = 0;
         }
         else {
            $credit_in_account = $account->credit;
            if ($credit_used > $credit_in_account || $credit_used > $grand_total){
               return $customer_phone_number;

            }
            else {
               $credit_to_update =  $credit_in_account - $credit_used;
                User::where('customer_phone_number', $customer_phone_number)->update(['credit'=>$credit_to_update]);
            }
         }

         $product_id = $rq->dbconproduct_id;
        $product_name=$rq->dbconproduct_name;
        $product_qty=$rq->dbconproduct_qty;
        $product_price= $rq->dbconproduct_price;
        $product_discount=$rq->dbconproduct_discount;
        $product_total=$rq->dbconproduct_total;
        
         $last = POSModel::latest('order_id')->first();
         $order_id_from_db = $last->order_id;
         $order_id_insert =  $order_id_from_db + 1;


         $customer = User::where('customer_phone_number',$customer_phone_number)->first();
         $credit_left = $customer->credit_left;
         $credit = $customer->credit;
         
          $calc_grand_total = $grand_total+$credit_left;
          
          while($calc_grand_total != 0){
          if ($calc_grand_total >= 100){
          
          
             $calc_grand_total -= 100;
            $credit += 5;
            $credit_left = 0;
            
          }else if ($calc_grand_total < 100 && $calc_grand_total > 0){
 
             $credit_left = 0;
             $credit_left += $calc_grand_total;
             
             $calc_grand_total = 0;

           }else {
            $calc_grand_total = 0;
           }

          }
          DB::statement("UPDATE users SET credit = $credit, credit_left =  $credit_left where customer_phone_number = $customer_phone_number");
         //  $datas = array();
        //  for($i=0; $i < count($product_name); $i++){
        //     $p_id = ProductTableModel::find($product_id[$i]);
        //     $up_pid = $p_id->product_qty - 1;

        //      $datas = array('product_qty'=>$up_pid);
           
        //   ProductTableModel::where('id', $product_id[$i])->update($datas);
        //  }

        DB::table('pos')->insert(
            ['customer_phone_number' => $customer_phone_number,
            'po_name' => 'Order#' . $order_id_insert,
             'grand_total' => $grand_total,
             'order_id' => $order_id_insert,
             'credit_used' => $credit_used]
        );
        
        $data = array();
          for($i=0; $i < count($product_name); $i++){
              $data = array('product_name'=>$product_name[$i],'product_qty'=>$product_qty[$i],'product_price'=>$product_price[$i],'product_discount'=>$product_discount[$i],'product_total' => $product_total[$i], 'order_id' => $order_id_insert, 'product_id' => $product_id[$i], 'customer_phone_number' => $customer_phone_number);
            
           OrderModel::insertOrIgnore($data);
          }
          for ($i=0; $i < count($product_name); $i++){

            DB::table('products')->where('id', $product_id[$i])->decrement('product_qty', $product_qty[$i]);

          }
         
          $notification = array('noti_title' => "Product Purchase", 'noti_desc' => "You have successfully purchased these products.", 'noti_status' => "success_order", 'customer_phone_number' => $customer_phone_number);
          NotificationModel::insertOrIgnore($notification);

        Cart::destroy();

         return 1;

    }

    

}
