<?php

namespace App\Http\Controllers;

use App\Models\OrdersModel;
use App\Models\POSModel;
use App\Models\OrderModel;
use Illuminate\Http\Request;
class DashboardController extends Controller
{
    //
    public function index(){
        $orders = OrdersModel::get();
        $sum_of_sale = OrderModel::sum('product_qty');
        $grand_total = POSModel::sum('grand_total');
        $all_customers = POSModel::get('customer_name');
        $customer_count = $all_customers->count();
        $ordered_products = OrderModel::get();
        return view('index', compact('orders', 'customer_count', 'grand_total','ordered_products', 'sum_of_sale'));
        
    }
}
