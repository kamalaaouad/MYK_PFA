@extends('layouts.layout')

@section('title')
    commande
@endsection

@section('content')
    <div class="col-md-12 col-lg-12">
        <div class="order-box">
            <form action="{{route('confirm_commande')}}" method="post">
                @csrf
                    <div class="title-left">
                        <h3>Your order</h3>
                    </div>
                    <div class="d-flex">
                        <div class="font-weight-bold">Product</div>
                        <div class="ml-auto font-weight-bold">Total</div>
                    </div>
                    <hr class="my-1">
                            <div class="d-flex">
                                <h4>Prix Hors tax</h4>
                                <div class="ml-auto font-weight-bold">  {{$tabledata['PHT']}}  DH</div>
                            </div>
                            <div class="d-flex">
                                <h4>Discount</h4>
                                <div class="ml-auto font-weight-bold">  {{$tabledata['dis']}} DH</div>
                            </div>
                            <hr class="my-1">
                            <div class="d-flex">
                                <h4>TVA</h4>
                                <div class="ml-auto font-weight-bold">  {{$tabledata['tva']}} DH</div>

                            </div>
                    <div class="d-flex">
                        <h4>Montant Totale</h4>
                        <div class="ml-auto font-weight-bold">  {{$tabledata['MHD']}} DH</div>
                        <input type="hidden" name="MHD" value="{{$tabledata['MHD']}}" >
                    </div>
                            <div class="d-flex">
                                <h4>Prix livraison</h4>
                                <div class="ml-auto font-weight-bold"> {{$tabledata['type']}} ({{$tabledata['pxde']}} DH) </div>
                                <input type="hidden" name="type" value="{{$tabledata['type']}}" >
                                <input type="hidden" name="pxde" value="{{$tabledata['pxde']}}" >
                                <input type="hidden" name="products_id" value="{{serialize($tabledata['id_product'])}}" >
                                <input type="hidden" name="products_quantity" value="{{serialize($tabledata['quantity_by_product'])}}" >
                            </div>
                            <hr>
                            <hr>
                            <div class="d-flex gr-total">
                                <h5>Grand Total (Prix livraison)</h5>
                                <div class="ml-auto h5">  {{$tabledata['amount']}} DH</div>
                                <input type="hidden" name="address" value="{{$tabledata['address']}}" >

                            </div>
                            <hr>
                        <div class="col-12 d-flex shopping-box"> <button type="submit" class="ml-auto btn hvr-hover" style="color:white;"> Confirmer </button> </div><br><br>

            </form>
        </div>

    </div>
@endsection
