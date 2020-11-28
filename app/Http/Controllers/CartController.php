<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $cart_products = Cart::where('user_id', $user->id)->with('product')->get();

        return view('cart', compact('cart_products', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();

        return back();
    }

    public function add_to_cart(Request $request)
    {
        $cart_product = Cart::where('user_id', Auth::user()->id)
                    ->where('product_id', $request->get('product_id'))->first();

        if($cart_product){
            $cart_product->update([
                'quantity' => $cart_product->quantity + 1
            ]);
        } else {
            Cart::create([
                'user_id' => Auth::user()->id,
                'product_id' => $request->get('product_id')
            ]);
        }
        return response(["message" => "success"], 200);
    }

    public function change_quantity(Request $request){

        Cart::find($request->cart_id)
              ->update([
                  "quantity" => $request->quantity
              ]);

        return response(['message' => 'success'], 200);

    }

    public function cart_count(){
        $count = Cart::where('user_id', Auth::user()->id)->count();
        return response(['count' => $count], 200);
    }
}
