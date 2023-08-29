<?php

namespace App\Http\Livewire;

use App\Models\ProductModel;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class ProductTable extends Component
{
    public array $quantity = [];
    public function render()
    {
        $products = ProductModel::all();
        $cart = Cart::content();
        return view('livewire.product-table', compact('products', 'cart'));
    }
    public function addToCart($product_id){
        
    }
}
