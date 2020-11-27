@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ url('/images/mobile.jpeg') }}" alt="">
                </div>
                <div class="col-md-8">
                    <h4>Mobile</h4>
                    <div>
                        <span class="price-text" style="font-size: 20px; font-weight: bold;">₹20,000</span>
                        &nbsp;&nbsp;&nbsp;
                        <span class="text-muted" style="font-size: 14px; font-weight: bold;"> <strike>₹25,000</strike></span>
                    </div>
                    <p style="margin-top: 2rem">
                        Take advantage of this realme smartphone’s 64 MP quad camera and click stunning photos. This phone also comes with a bunch of cool filters that’ll make night photography all the more amazing. In addition, this smartphone’s Helio G95 Gaming Processor makes it one powerful performer.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
