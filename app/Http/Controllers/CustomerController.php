<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\OrderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\NotificationModel;
class CustomerController extends Controller

{
    //
    public function index(){

        $sum_of_bought_product = 0;
        $sum_of_bought_price = 0;
        $customer_phone_number = Auth::user()->customer_phone_number;
        $balance = Auth::user()->balance;
       $ordered_product = OrderModel::where('customer_phone_number', $customer_phone_number)->get();
        $credit_left = Auth::user()->credit_left;
        $credit = Auth::user()->credit;
       
       foreach ($ordered_product as $odp){
            $sum_of_bought_product += $odp->product_qty;
            $sum_of_bought_price += $odp->product_price;
       }
       
       $notification = NotificationModel::where('customer_phone_number', $customer_phone_number)->get();
       if (!$notification){
            $notification = "ok";
       }
       
        return view('customer.index', compact('ordered_product', 'credit', 'credit_left', 'balance', 'sum_of_bought_product', 'sum_of_bought_price', 'notification'));
    }
}
