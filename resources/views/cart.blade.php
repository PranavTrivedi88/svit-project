@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card ">
                <div class="card-title">
                    Customer Details
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="text-muted">Name: </span> {{ $user->name }}
                            <br>
                            <span class="text-muted">Email: </span> {{ $user->email }}
                        </div>
                        <div class="col-md-6">
                            <span class="text-muted">Address</span>
                            <br>
                            {{ $user->address }}
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card cart-products">
                <div class="card-title">
                    Product Details
                </div>
                <div class="card-body">
                    @php
                        $price = 0;
                        $discount = 0;
                    @endphp
                    @forelse ($cart_products as $cart_product)
                        @php
                            $product = $cart_product->product;
                            $discount_amount = ($product->price_per_unit * $product->discount_rule->percentage)/100;
                            $price_amount = ($product->price_per_unit - $discount_amount) * $cart_product->quantity;
                            $price += $price_amount;
                            $discount += $discount_amount * $cart_product->quantity;
                        @endphp
                        <div class="row cart-product">
                            <div class="col-md-3 outer-div">
                                <div class="inner-div">
                                    <img src="{{ url('/images/' . $product->image) }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="pl-4">
                                    <h6 style="color: #2196F3">{{ $product->name }}</h6>
                                    <div>
                                        <span class="price-text" style="font-size: 20px; font-weight: 500;">₹{{ $product->price_per_unit - $discount_amount }}</span>
                                        &nbsp;&nbsp;&nbsp;
                                        <span class="text-muted" style="font-size: 14px;"> <strike>₹{{ $product->price_per_unit }}</strike></span>
                                        &nbsp;
                                        <span class="text-small discount">{{ $product->discount_rule->percentage }}% off</span>
                                    </div>
                                    <div class="mt-2">
                                        <a href="#" class="btn btn-sm btn-dark button-reduce-quantity" data-id="{{ $cart_product->id }}">-</a>
                                        <input type="text" class="product-quantity cart{{ $cart_product->id }}" value="{{ $cart_product->quantity }}">
                                        <a href="#" class="btn btn-sm btn-dark button-add-quantity" data-id="{{ $cart_product->id }}">+</a>
                                        <form action="/cart/{{ $cart_product->id }}" method="POST" style="display: contents">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger ml-4 delete{{ $cart_product->id }}">Remove</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>Nothing in the cart right now</p>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card price-detail">
                <div class="card-title">
                    Price Details
                </div>
                <div class="card-body" style="padding: 0 20px">
                    <div class="row">
                        <table class="w-100">
                            <tr>
                                <th class="w-75">Price</th>
                                <td>₹{{ $price }}</td>
                            </tr>
                            <tr>
                                <th>Discount</th>
                                <td class="discount">-₹{{ $discount }}</td>
                            </tr>
                        </table>
                        <hr>
                        <table class="w-100 total">
                            <tr>
                                <th class="w-75">Total</th>
                                <td>₹{{ $price - $discount }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="row">
                        <a class="btn btn-primary w-100 m-3">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/cart.js') }}"></script>
@endsection
