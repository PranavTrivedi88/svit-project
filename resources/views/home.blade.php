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
                        <div class="card recent-product ml-3 mb-3">
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
                    @empty
                        No products added recently
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
