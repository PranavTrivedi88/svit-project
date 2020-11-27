@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card product-detail">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4" style="margin: auto">
                    <div class="product-detail-image">
                        <img class="pr-3" src="{{ url('/images/' . $product->image) }}" alt="">
                        <div class="mt-3" style="display: flex; justify-content: space-evenly">
                            <a class="buy-now button">Buy Now</a>
                        <a class="add-to-cart button" data-product-id="{{ $product->id }}">Add to Cart</a>
                        </div>
                    </div>
                </div>
                @php
                    $discount_amount = ($product->price_per_unit * $product->discount_rule->percentage)/100;
                @endphp
                <div class="col-md-8 mt-3">
                    <h5 style="color: #2196F3">{{ $product->name }}</h5>
                    <div>
                        <span class="price-text" style="font-size: 25px; font-weight: 500;">₹{{ $product->price_per_unit - $discount_amount }}</span>
                        &nbsp;&nbsp;&nbsp;
                        <span class="text-muted" style="font-size: 14px;"> <strike>₹{{ $product->price_per_unit }}</strike></span>
                        &nbsp;
                        <span class="text-small discount">{{ $product->discount_rule->percentage }}% off</span>
                    </div>
                    <p style="margin-top: 2rem">
                        {{ $product->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
