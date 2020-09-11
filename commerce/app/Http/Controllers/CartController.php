<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Session;
use App\Product;

class CartController extends Controller
{
    public function getAddToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->back();
    }
    
    public function checkCart() {
        if(!Session::has('cart')) {
            return veiw('cart.cart', ['products' => null]);
        }
        
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $products = Product::all();
        return view('cart.cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function cartIndex() {
        return view('cart.check');
    }
}
