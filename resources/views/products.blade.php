@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @forelse ($products as $product)
            <div class="col-md-4">
                <a class="single-product" href="{{ url('/products/' . $product->id) }}">
                    <div class="card ml-3 mb-3">
                        <div class="card-body" style="padding: 5px">
                            <p class="card-text mb-0">
                                <span>{{ $product->name }}</span>
                            </p>
                            <hr style="margin: 5px 0">
                        </div>
                        <div class="mt-2 outer-div">
                            <div class="inner-div">
                                <img src="{{ url('/images/' . $product->image) }}" class="card-img-top" alt="Mobile">
                            </div>
                        </div>
                        <div class="m-3">
                            <button class="buy-now mb-2 w-100">Buy Now</button>
                            <br>
                            <button class="add-to-cart w-100">Add to Cart</button>
                        </div>

                    </div>
                </a>
            </div>
        @empty
            No products found
        @endforelse
    </div>
</div>
@endsection
