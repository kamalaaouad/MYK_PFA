@extends('layouts.layout')

@section('title')
    Suivre votre commande
@endsection
@section('links')
<style>
    body {
        color: #000;
        overflow-x: hidden;
        height: 100%;
        background-color: #8C9EFF;
        background-repeat: no-repeat
    }

    .card {
        z-index: 0;
        background-color: #ECEFF1;
        padding-bottom: 20px;
        margin-top: 90px;
        margin-bottom: 90px;
        border-radius: 10px
    }

    .top {
        padding-top: 40px;
        padding-left: 13% !important;
        padding-right: 13% !important
    }

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: #455A64;
        padding-left: 0px;
        margin-top: 30px
    }

    #progressbar li {
        list-style-type: none;
        font-size: 13px;
        width: 25%;
        float: left;
        position: relative;
        font-weight: 400
    }

    #progressbar .step0:before {
        font-family: FontAwesome;
        content: "";
        color: #fff
    }

    #progressbar li:before {
        width: 40px;
        height: 40px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        background: #C5CAE9;
        border-radius: 50%;
        margin: auto;
        padding: 0px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 12px;
        background: #C5CAE9;
        position: absolute;
        left: 0;
        top: 16px;
        z-index: -1
    }

    #progressbar li:last-child:after {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
        position: absolute;
        left: -50%
    }

    #progressbar li:nth-child(2):after,
    #progressbar li:nth-child(3):after {
        left: -50%
    }

    #progressbar li:first-child:after {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
        position: absolute;
        left: 50%
    }

    #progressbar li:last-child:after {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px
    }

    #progressbar li:first-child:after {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #651FFF
    }

   #progressbar li.active:before {
        font-family: FontAwesome;
        content: ""
    }

    .icon {
        width: 60px;
        height: 60px;
        margin-right: 15px
    }

    .icon-content {
        padding-bottom: 20px
    }

    @media screen and (max-width: 992px) {
        .icon-content {
            width: 50%
        }
    }
</style>

@endsection

@section('content')
    @foreach($deliveries as $delivery)
    <div class="container px-1 px-md-4 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <h1 style="color: #1b1e21;font-size: 80px;">Liste des commandes</h1>
        </div>
        <div class="card">
            <div class="row d-flex justify-content-between px-3 top">
                <div class="d-flex">
                    <h3>ID de Livraison <span class="text-primary font-weight-bold">:{{$delivery->id}}</span></h3>
                </div>
                <div class="d-flex flex-column text-sm-right">
                    <h4 class="mb-0">Arrivé estimé<span>02/07/20</span></h4>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <h1><span class="font-weight-bold" style="text-align: center;">{{$delivery->description}}</span></h1>
            </div> <!-- Add class 'active' to progress -->
            <div class="row d-flex justify-content-center">
                <div class="col-12">
                    <ul id="progressbar" class="text-center">
                        @if($delivery->state == 'non livrée')
                            <li class="active step0"></li>
                            <li class="active step0"></li>
                            <li class="step0"></li>
                            <li class="step0"></li>
                        @elseif($delivery->state == 'en cours')
                            <li class="active step0"></li>
                            <li class="active step0"></li>
                            <li class="active step0"></li>
                            <li class="step0"></li>
                        @else
                            <li class="active step0"></li>
                            <li class="active step0"></li>
                            <li class="active step0"></li>
                            <li class="active step0"></li>
                        @endif

                    </ul>
                </div>
            </div>
            <div class="row justify-content-between top">
                <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/9nnc9Et.png">
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Commande<br>Passée</p>
                    </div>
                </div>
                <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/u1AzR7w.png">
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Commande<br>envoyée</p>
                    </div>
                </div>
                <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/TkPm63y.png">
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Commande<br>En Route</p>
                    </div>
                </div>
                <div class="row d-flex icon-content"> <img class="icon" src="https://i.imgur.com/HdsziHP.png">
                    <div class="d-flex flex-column">
                        <p class="font-weight-bold">Commande<br>Arrivée</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

@endsection
