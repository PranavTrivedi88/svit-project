@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body" style="padding: 0;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="banner">
                        <img src="{{ url('/images/banner.jpg') }}" alt="Banner">
                    </div>

                </div>
            </div>
            <br>
            <div class="card recent-products">
                <h5 class="card-title m-3">Recent Products</h5>
                <div class="card-body main" style="padding: 0">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @forelse ($recent_products as $product)
                        <div class="recent-product">
                            <a class=" ml-3 mb-3" href="{{ url('/products/' . $product->id) }}">
                                <div class="card">
                                    <div class="card-body" style="padding: 5px">
                                        <p class="card-text m-0">
                                            <span>{{ $product->name }}</span>
                                        </p>
                                        <hr style="margin: 5px 0">
                                    </div>
                                    <div class="outer-div">
                                        <div class="inner-div">
                                            <img src="{{ url('/images/' . $product->image) }}" class="card-img-top" alt="Mobile">
                                        </div>
                                    </div>

                                </div>
                            </a>

                            <div class="m-3">
                                <a class="buy-now button mb-2 w-100">Buy Now</a>
                                <br>
                                <a class="add-to-cart button w-100 mb-2" data-product-id="{{ $product->id }}">Add to Cart</a>
                            </div>
                        </div>
                    @empty
                        <div class="text-center w-100 mb-3">
                            <span>No products added recently</span>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
