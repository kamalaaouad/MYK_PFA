@extends('layouts.admin_layout')

@section('title')
    Transporteur
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-white mt-5 mb-5">
                    Liste des nouvelles commandes à livrées
                </h1>
            </div>
        </div>
        <!-- row -->
        <div class="col-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                <h2 class="tm-block-title"></h2>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID de Livraison</th>
                        <th scope="col">ID du commande</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">TYPE</th>
                        <th scope="col">ADDRESS</th>
                        <th scope="col">DATE</th>
                        <th scope="col">ACTION</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                        <tr>
                            <th scope="row"><b>{{$item->id}}</b></th>
                            <th scope="row"><b>{{$item->commande_id}}</b></th>
                            <td>
                                <div class="tm-status-circle cancelled">
                                </div>{{$item->state}}
                            </td>
                            <td><b>{{$item->delivery_option}}</b></td>
                            <td><b>{{$item->address}}</b></td>
                            <td><b>{{$item->created_at}}</b></td>
                            <td>
                                <a href="{{route('deliver',$item->id)}}" class="tm-product-delete-link">
                                    <i class="fas fa-truck tm-product-delete-icon"></i>
                                </a>
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>


@endsection

@section('script')

@endsection
