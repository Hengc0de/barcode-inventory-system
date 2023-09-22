<?php

namespace App\Http\Controllers;

use App\Models\POSModel;
use App\Models\ProductModel;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use PDF;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\OrderModel;
use App\Models\OrdersModel;
use App\Models\User;
use App\Models\NotificationModel;
class POSController extends Controller
{
    //
    public function fetch_credit_not_enough( Request $request){

        $customer_phone_number = $request->customer_phone_number;
  
        $user = User::where('customer_phone_number', $customer_phone_number)->first();
        if ($user ){
            $credit = $user->credit;
            $credit_found = "true";
        }else {
            $credit = "Phone number not found";
            $credit_found = "false";
        }
        $products = ProductModel::all();
        $cart = Cart::content();
        $used = "true";
        $not_enough = "Credit unusable";
        $notification = NotificationModel::where('customer_phone_number', $customer_phone_number)->get();
        if (!$notification){
             $notification = "ok";
        }
        return view('pos', compact('credit_found',  'credit', 'customer_phone_number', 'products', 'cart', 'used', 'not_enough', 'notification'));
    }
    public function fetch_credit( Request $request){

        $customer_phone_number = $request->customer_phone_number;
  
        $user = User::where('customer_phone_number', $customer_phone_number)->first();
        if ($user ){
            $credit = $user->credit;
            $credit_found = "true";
        }else {
            $credit = "Phone number not found";
            $credit_found = "false";
        }
        $notification = NotificationModel::where('customer_phone_number', $customer_phone_number)->get();
        if (!$notification){
             $notification = "ok";
        }
        $products = ProductModel::all();
        $cart = Cart::content();
        $used = "true";
        
        return view('pos', compact('credit_found',  'credit', 'customer_phone_number', 'products', 'cart', 'used', 'notification'));
    }
    public function index(){
        $products = ProductModel::all();
        $cart = Cart::content();
        // dd($cart);
        $customer_phone_number = auth()->user()->customer_phone_number;
       $notification = NotificationModel::where('customer_phone_number', $customer_phone_number)->get();
       if (!$notification){
            $notification = "ok";
       }
        return view('employee.index', compact('products', 'cart', 'notification'));
 
    }
    public function add_table(Request $request){
        $po_name = $request->po_name;
        DB::insert('insert into pos (po_name) values(?)',[$po_name]);
        $result = ProductModel::get();
        return view('pos', ['products' => $result, 'po_name' => $po_name]);
    }
    public function add($id){
        $result = ProductModel::get();

        // $posAdd = ProductModel::find($id)->first();
        // POSModel::()
        // return view('pos', ['products' => $result, $posAdd]);
        
    }
    public function manage(){
        $result = POSModel::get();
        return view('manage_po', ['pos' => $result]);
    }
    public function print_pdf($id){
        $orders = POSModel::where('po_id',$id)->first();
        $order_id = $orders->order_id;
        $ordered_products = OrderModel::where('order_id', $order_id)->get();
  
        
        $pdf = PDF::loadView('pos.pdf', compact('ordered_products', 'orders'));
        return $pdf->download('pos/pdf.pdf');

    }
    public function view_pdf($id){
        $orders = POSModel::where('po_id',$id)->first();
        $order_id = $orders->order_id;
        $ordered_products = OrderModel::where('order_id', $order_id)->get();
  
        
        return view('pos.pdf', compact('ordered_products', 'orders'));
    }
    public function delete($id){
        $orders =  POSModel::where('po_id',$id)->first();
        $order_id = $orders->order_id;
    //    dd($order_id);
   

     
            OrderModel::where('order_id', $order_id)->delete();

            POSModel::where('po_id',$id)->delete();
        

       return redirect()->back()->with('Success', 'Order deleted successfully');
    }
}
