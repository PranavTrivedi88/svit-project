@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @forelse ($products as $product)
            <div class="col-md-4">
                <a href="{{ url('/products/' . $product->id) }}">
                    <div class="card single-product ml-3 mb-3">
                        <div class="mt-4 outer-div">
                            <div class="inner-div">
                                <img src="{{ url('/images/' . $product->image) }}" class="card-img-top" alt="Mobile">
                            </div>
                        </div>
                        <div class="card-body" style="padding: 5px">
                        <hr style="margin-bottom: 5px">
                        <p class="card-text">
                            <span>{{ $product->name }}</span>
                        </p>
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
