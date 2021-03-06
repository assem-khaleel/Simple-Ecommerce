<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;


class ShoppingController extends Controller
{
    public function add_to_cart()
    {

        $pdt = Product::find(request()->pdt_id);

        $cartItem = Cart::add([
            'id' => $pdt->id,
            'name' => $pdt->name,
            'qty' => request()->qty,
            'price' => $pdt->price,
            'weight' => 1
        ]);


        Cart::associate($cartItem->rowId, Product::class);
        toastr()->success('Product added to cart.');
        return redirect()->route('cart');
    }

    public function cart()
    {
        return view('cart');
    }

    public function cart_delete($id)
    {
        Cart::remove($id);

        toastr()->success('Product removed from cart.');

        return redirect()->back();
    }

    public function incr($id, $qty)
    {
        Cart::update($id, $qty + 1);
        toastr()->success('Product qunatity updated.');
        return redirect()->back();
    }
    public function decr($id, $qty)
    {
        Cart::update($id, $qty - 1);
        toastr()->success('Product qunatity updated.');
        return redirect()->back();
    }

    public function rapid_add($id)
    {
        $pdt = Product::find($id);
        $cartItem = Cart::add([
            'id' => $pdt->id,
            'name' => $pdt->name,
            'qty' => 1,
            'price' => $pdt->price,
            'weight' => 1
        ]);

        Cart::associate($cartItem->rowId, Product::class);
        toastr()->success('Product added to cart.');
        return redirect()->route('cart');
    }
}
