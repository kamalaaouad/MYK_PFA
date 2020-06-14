@extends('layouts.layout')

@section('title')
    cart
@endsection

@section('content')
    <!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Cart</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active">Cart</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Cart  -->
<div class="cart-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-main table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Images</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Remove</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($card->items as $prodct)
                            <tr>
                                <td class="thumbnail-img">
                                    <a href="#">
                                        <img class="cart-thumb" src="image/instagram/{{$prodct['image']}}" alt="" style="width: 60%;height: 20%"/>
                                    </a>
                                </td>
                                <td class="name-pr">
                                    <a href="#">
                                        {{$prodct['name']}}
                                    </a>
                                </td>
                                <td class="price-pr">
                                    <p>$ {{$prodct['price']}}</p>
                                </td>
                                <td class="quantity-box"><input type="number" size="4" value="{{$prodct['quantity']}}" min="0" step="1" class="c-input-text qty text"></td>
                                <td class="remove-pr">
                                    <a href="#">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <!--<div class="col-lg-6 col-sm-6">
                <div class="coupon-box">
                    <div class="input-group input-group-sm">
                        <input class="form-control" placeholder="Enter your coupon code" aria-label="Coupon code" type="text">
                        <div class="input-group-append">
                            <button class="btn btn-theme" type="button">Apply Coupon</button>
                        </div>
                    </div>
                </div>
            </div>-->
            <div class="col-lg-6 col-sm-6">
                <div class="update-box">
                    <input value="Update Cart" type="submit">
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-lg-8 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12">
                <div class="order-box">
                    <h3>Order summary</h3>
                    @if($card)
                        <div class="d-flex">
                            <h4>Total Hors tax</h4>
                            <div class="ml-auto font-weight-bold"> $ {{$card->totalPrice}} </div>
                        </div>
                        <div class="d-flex">
                            <h4>Discount</h4>
                            <div class="ml-auto font-weight-bold"> $ {{$card->totdiscount}} </div>
                        </div>
                        <hr class="my-1">
                        <div class="d-flex">
                            <h4>Tax</h4>
                            <div class="ml-auto font-weight-bold"> $ {{$card->alltva}} </div>
                        </div>
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Grand Total</h5>
                            <div class="ml-auto h5"> $ {{$card->PriceHorstx}} </div>
                        </div>
                        <hr>
                    @endif
                </div>
            </div>
            <div class="col-12 d-flex shopping-box"><a href="{{--route('cart.checkout',$card->PriceHorstx)--}}" class="ml-auto btn hvr-hover">Checkout</a> </div>
        </div>

    </div>
</div>
<!-- End Cart -->
@endsection