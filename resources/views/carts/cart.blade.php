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
                            <th>Nom</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>  </th>
                            <th>Supprimer</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(session()->has('card'))
                            @if(isset($card->items))
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
                                <form method="POST" action="{{route('update_qtt',$prodct['id'])}}">
                                    @csrf
                                <td class="price-pr">
                                   <p> $ {{$prodct['price_Unit']}}</p>
                                </td>
                                <td class="quantity-box"><input type="number" size="4" name="update_qtt" value="{{$prodct['quantity']}}" min="1" max="{{$prodct['stock']}}" step="1" class="c-input-text qty text"></td>

                                    <td class="">
                                    <button type="submit" style="cursor: pointer">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-repeat" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.854 7.146a.5.5 0 0 0-.708 0l-2 2a.5.5 0 1 0 .708.708L2.5 8.207l1.646 1.647a.5.5 0 0 0 .708-.708l-2-2zm13-1a.5.5 0 0 0-.708 0L13.5 7.793l-1.646-1.647a.5.5 0 0 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0 0-.708z"/>
                                            <path fill-rule="evenodd" d="M8 3a4.995 4.995 0 0 0-4.192 2.273.5.5 0 0 1-.837-.546A6 6 0 0 1 14 8a.5.5 0 0 1-1.001 0 5 5 0 0 0-5-5zM2.5 7.5A.5.5 0 0 1 3 8a5 5 0 0 0 9.192 2.727.5.5 0 1 1 .837.546A6 6 0 0 1 2 8a.5.5 0 0 1 .501-.5z"/>
                                        </svg>
                                    </button>
                                </td>
                            </form>
                                <td class="remove-pr" >
                                    <a style="cursor: pointer;" href="{{route('delete_cart',$prodct['id'])}}">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                                @endif
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <hr><hr>
        <!--<div class="row my-5">
            <div class="col-lg-6 col-sm-6">
                <div class="coupon-box">
                    <div class="input-group input-group-sm">
                        <input class="form-control" placeholder="Enter your coupon code" aria-label="Coupon code" type="text">
                        <div class="input-group-append">
                            <button class="btn btn-theme" type="button">Apply Coupon</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="update-box">
                    <input value="Update Cart" type="submit">
                </div>
            </div>
        </div>-->

        @if(session()->has('card'))
            @if(isset($card->items))

            <div class="row my-5">
            <div class="col-lg-8 col-sm-12"></div>
            <div class="col-lg-4 col-sm-12">
                <div class="order-box">
                    <h3>Resumé du commande</h3>
                    @if($card)
                        <div class="d-flex">
                            <h4>Prix HT</h4>
                            <div class="ml-auto font-weight-bold"> + {{$card->TTC_p_Pro}} DH</div>
                        </div>
                        <div class="d-flex">
                            <h4>TVA</h4>
                            <div class="ml-auto font-weight-bold"> + {{($card->alltva)}} DH</div>
                        </div>

                        <hr class="my-1">
                        <div class="d-flex">
                            <h4>Remise</h4>
                            <div class="ml-auto font-weight-bold"> - {{$card->totdiscount}} DH</div>

                        </div>
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Prix TTC</h5>
                            <div class="ml-auto h5"> + {{$card->TTC_totale}} DH</div>
                        </div>
                        <hr>
                    @endif
                </div>
            </div>

            <div class="col-12 d-flex shopping-box"><a href="{{route('cart.checkout',$card->TTC_totale)}}" class="ml-auto btn hvr-hover">Checkout</a> </div>

        </div>


                @endif
@endif
    </div>
</div>
<!-- End Cart -->
@endsection
