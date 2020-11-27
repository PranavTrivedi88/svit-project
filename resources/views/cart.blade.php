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
                            <span class="text-muted">Name: </span> Pranav
                            <br>
                            <span class="text-muted">Email: </span> pranav@atliq.com
                        </div>
                        <div class="col-md-6">
                            <span class="text-muted">Address</span>
                            <br>
                            Vadodara
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
                    <div class="row cart-product">
                        <div class="col-md-3 outer-div">
                            <div class="inner-div">
                                <img src="{{ url('/images/laptop.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="pl-4">
                                <h6 style="color: #2196F3">Laptop</h6>
                                <div>
                                    <span class="price-text" style="font-size: 20px; font-weight: 500;">₹72000</span>
                                    &nbsp;&nbsp;&nbsp;
                                    <span class="text-muted" style="font-size: 14px;"> <strike>₹80000</strike></span>
                                    &nbsp;
                                    <span class="text-small discount">10% off</span>
                                </div>
                                <div class="mt-2">
                                    <a href="#" class="btn btn-sm btn-dark">-</a>
                                    <input type="text" class="product-quantity" value="0">
                                    <a href="#" class="btn btn-sm btn-dark">+</a>
                                    <button class="btn btn-sm btn-outline-danger ml-4">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row cart-product">
                        <div class="col-md-3 outer-div">
                            <div class="inner-div">
                                <img src="{{ url('/images/laptop.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="pl-4">
                                <h6 style="color: #2196F3">Laptop</h6>
                                <div>
                                    <span class="price-text" style="font-size: 20px; font-weight: 500;">₹72000</span>
                                    &nbsp;&nbsp;&nbsp;
                                    <span class="text-muted" style="font-size: 14px;"> <strike>₹80000</strike></span>
                                    &nbsp;
                                    <span class="text-small discount">10% off</span>
                                </div>
                                <div class="mt-2">
                                    <a href="#" class="btn btn-sm btn-dark">-</a>
                                    <input type="text" class="product-quantity" value="0">
                                    <a href="#" class="btn btn-sm btn-dark">+</a>
                                    <button class="btn btn-sm btn-outline-danger ml-4">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <td>₹2000</td>
                            </tr>
                            <tr>
                                <th>Discount</th>
                                <td class="discount">-₹500</td>
                            </tr>
                        </table>
                        <hr>
                        <table class="w-100 total">
                            <tr>
                                <th class="w-75">Total</th>
                                <td>₹3000</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection
