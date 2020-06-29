@extends('layouts.layout')

@section('title')
    Index
@endsection

@section('content')


    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Checkout</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <!-- <div class="row new-account-login">
                 <div class="col-sm-6 col-lg-6 mb-3">
                     <div class="title-left">
                         <h3>Account Login</h3>
                     </div>
                     <h5><a data-toggle="collapse" href="#formLogin" role="button" aria-expanded="false">Click here to Login</a></h5>
                     <form class="mt-3 collapse review-form-box" id="formLogin">
                         <div class="form-row">
                             <div class="form-group col-md-6">
                                 <label for="InputEmail" class="mb-0">Email Address</label>
                                 <input type="email" class="form-control" id="InputEmail" placeholder="Enter Email"> </div>
                             <div class="form-group col-md-6">
                                 <label for="InputPassword" class="mb-0">Password</label>
                                 <input type="password" class="form-control" id="InputPassword" placeholder="Password"> </div>
                         </div>
                         <button type="submit" class="btn hvr-hover">Login</button>
                     </form>
                 </div>
                 <div class="col-sm-6 col-lg-6 mb-3">
                     <div class="title-left">
                         <h3>Create New Account</h3>
                     </div>
                     <h5><a data-toggle="collapse" href="#formRegister" role="button" aria-expanded="false">Click here to Register</a></h5>
                     <form class="mt-3 collapse review-form-box" id="formRegister">
                         <div class="form-row">
                             <div class="form-group col-md-6">
                                 <label for="InputName" class="mb-0">First Name</label>
                                 <input type="text" class="form-control" id="InputName" placeholder="First Name"> </div>
                             <div class="form-group col-md-6">
                                 <label for="InputLastname" class="mb-0">Last Name</label>
                                 <input type="text" class="form-control" id="InputLastname" placeholder="Last Name"> </div>
                             <div class="form-group col-md-6">
                                 <label for="InputEmail1" class="mb-0">Email Address</label>
                                 <input type="email" class="form-control" id="InputEmail1" placeholder="Enter Email"> </div>
                             <div class="form-group col-md-6">
                                 <label for="InputPassword1" class="mb-0">Password</label>
                                 <input type="password" class="form-control" id="InputPassword1" placeholder="Password"> </div>
                         </div>
                         <button type="submit" class="btn hvr-hover">Register</button>
                     </form>
                 </div>
             </div>-->
            <div class="row">
                <form class="needs-validation" novalidate method="Post" action="{{route('commande')}}">
                    @csrf
                    <div class="col-sm-6 col-lg-6 mb-3">
                        <div class="checkout-address">
                            <div class="title-left">
                                <h3>Données du commande</h3>
                            </div>

                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">Nom *</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="" name="nom" >
                                        <div class="invalid-feedback"> Valid first name is required. </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName">Prenom *</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="" name="prenom" >
                                        <div class="invalid-feedback"> Valid last name is required. </div>
                                    </div>
                                </div>
                                <!--<div class="mb-3">
                                    <label for="username">Nom Utilisateur *</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="username" placeholder="username" name="user_name" >
                                        <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                                    </div>
                                </div>-->
                                <div class="mb-3">
                                    <label for="email">Address Email *</label>
                                    <input type="email" class="form-control" id="email" placeholder="Your mail" name="email">
                                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                                </div>
                                <div class="mb-3">
                                    <label for="address">Address *</label>
                                    <input type="text" class="form-control" id="address" placeholder="your address1" name="address1">
                                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                                </div>
                                <!--<div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label for="country">Pays *</label>
                                        <select class="wide w-100" id="country" name="select_pays">
                                            <option data-display="Select">Votre pays</option>
                                            <option value="Maroc">Maroc</option>
                                            <option value="Algérie">Algérie</option>
                                            <option value="Tunisie">Tunisie</option>
                                        </select>
                                        <div class="invalid-feedback"> Please select a valid country. </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="state">Ville *</label>
                                        <select class="wide w-100" id="state" name="select_ville">
                                            <option data-display="Select">Votre Ville</option>
                                            <option value="Rabat">Rabat</option>
                                            <option value="Tunisie">Tunisie</option>
                                            <option value="Algérie">Algérie</option>
                                        </select>
                                        <div class="invalid-feedback"> Please provide a valid state. </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="zip">Code Postale *</label>
                                        <input type="text" class="form-control" id="zip" placeholder="code postale" name="code_postale">
                                        <div class="invalid-feedback"> Zip code required. </div>
                                    </div>
                                </div>-->
                                <hr class="mb-4">
                                <!--<div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="verifyaddress" id="same-address" value="L'adresse de livraison est la même que mon adresse de facturation">
                                    <label class="custom-control-label" for="same-address">L'adresse de livraison est la même que mon adresse de facturation</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="save" id="save-info" value="Enregistrer ces information pour la prochaine fois">
                                    <label class="custom-control-label" for="save-info">Enregistrer ces information pour la prochaine fois</label>
                                </div>-->
                                <hr class="mb-4">
                                <div class="title"> <span>Payment</span> </div>
                                <div class="d-block my-3">
                                    <div class="custom-control custom-radio">
                                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" value="Carte de crédi" checked>
                                        <label class="custom-control-label" for="credit">Carte de crédit</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" value="Carte de débit" checked>
                                        <label class="custom-control-label" for="debit">Carte de débit</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" value="Paypal" checked>
                                        <label class="custom-control-label" for="paypal">Paypal</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="cc-name">Nom sur la carte</label>
                                        <input type="text" class="form-control" id="cc-name" name="namecart" placeholder=" votre Nom sur carte" > <small class="text-muted">Full name as displayed on card</small>
                                        <div class="invalid-feedback"> Name on card is required </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="cc-number">Numéro de Carte de Crédit</label>
                                        <input type="text" class="form-control" id="cc-number" name="numbercart" placeholder="votre numero de carte credit" >
                                        <div class="invalid-feedback"> Credit card number is required </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label for="cc-expiration">Expiration</label>
                                        <input type="text" class="form-control" id="cc-expiration" name="exp" placeholder="code Expiration" >
                                        <div class="invalid-feedback"> Expiration date required </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="cc-expiration">CVV</label>
                                        <input type="text" class="form-control" id="cc-cvv" name="ccv" placeholder=" Valeur de vérification de la carte" >
                                        <div class="invalid-feedback"> Security code required </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="payment-icon">
                                            <ul>
                                                <li><img class="img-fluid" src="{{asset('image/payment-icon/1.png')}}" alt="" style="width: 70%;height: 90%;"></li>
                                                <li><img class="img-fluid" src="{{asset('image/payment-icon/2.png')}}" alt="" style="width: 70%;height: 90%;"></li>
                                                <li><img class="img-fluid" src="{{asset('image/payment-icon/3.png')}}" alt="" style="width: 70%;height: 90%;"></li>
                                                <li><img class="img-fluid" src="{{asset('image/payment-icon/5.png')}}" alt="" style="width: 70%;height: 90%;"></li>
                                                <li><img class="img-fluid" src="{{asset('image/payment-icon/7.png')}}" alt="" style="width: 70%;height: 90%;"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-1">
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 mb-3">
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="shipping-method-box">
                                    <div class="title-left">
                                        <h3>Type de Livraison</h3>
                                    </div>
                                    <div class="mb-4">
                                        <div class="custom-control custom-radio">
                                            <input id="shippingOption1" name="shipping-option" class="custom-control-input" checked="checked" type="radio" value="Standard Delivery">
                                            <label class="custom-control-label" for="shippingOption1">Standard Delivery</label> <span class="float-right font-weight-bold">Gratuite</span> </div>
                                        <div class="ml-4 mb-2 small">(3-7 business days)</div>
                                        <div class="custom-control custom-radio">
                                            <input id="shippingOption2" name="shipping-option" class="custom-control-input" type="radio" value="Express Delivery">
                                            <label class="custom-control-label" for="shippingOption2">Express Delivery</label> <span class="float-right font-weight-bold">25.00 DH</span> </div>
                                        <div class="ml-4 mb-2 small">(2-4 business days)</div>
                                        <div class="custom-control custom-radio">
                                            <input id="shippingOption3" name="shipping-option" class="custom-control-input" type="radio" value="OneDay Delivey">
                                            <label class="custom-control-label" for="shippingOption3">OneDay Delivery</label> <span class="float-right font-weight-bold">50.00 DH</span> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12">
                                <div class="odr-box">
                                    <div class="title-left">
                                        <h3>Shopping cart</h3>
                                    </div>
                                    <div class="rounded p-2 bg-light">
                                        @if(session()->has('card'))
                                            @if(isset($card->items))
                                                @foreach($card->items as $cart)
                                                <div class="media mb-2 border-bottom">
                                                    <div class="media-body"> <a href="detail.html"> {{$cart['name']}}</a>
                                                        <div class="small text-muted">Price: {{$cart['price']}} DH<span class="mx-2">|</span> Qty: {{$cart['quantity']}} <span class="mx-2">|</span> Subtotal: {{$cart['price_Unit']}} DH</div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!--<div class="col-12 d-flex shopping-box"> <a href="{{route('commande')}}" class="ml-auto btn hvr-hover">Place Order</a> </div>-->
                            <div class="col-12 d-flex shopping-box"> <button type="submit" class="ml-auto btn hvr-hover" style="color: white">Place Order</button> </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- End Cart -->
@endsection
