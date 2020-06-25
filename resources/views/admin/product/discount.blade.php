@extends('layouts.admin_layout')

@section('title')
    Soldes
@endsection

@section('content')

    <div class="container mt-5">
        <div class="row tm-content-row">
            <form class="form-inline" method="POST" action="{{route('discountEdit')}}">
                @csrf
                <input type="hidden" name="id" value="{{$toEdit->id}}" >
                    <table>
                        <div class="form-row">
                            <thead>
                                <td class="col-md-6 mb-3">Nom</td>
                                <td class="col-md-6 mb-3">Prix hors tax</td>
                                <td class="col-md-6 mb-3">Prix TTC</td>
                                <td class="col-md-6 mb-3">Remise en %</td>
                            </thead>
                        </div>
                        <div class="form-row">
                            <tr>
                                <td class="col-md-6 mb-3">{{$toEdit->name}}</td>
                                <td class="col-md-6 mb-3">{{$toEdit->price}}</td>
                                <td class="col-md-6 mb-3">{{$toEdit->price*(1+$toEdit->TVA)}}</td>
                                <td class="col-md-6 mb-3"><input type="number" min="0" max="90" class="form-control" name="discount" value="{{$toEdit->discount * 100}}"></td>
                            </tr>
                        </div>

                    </table>
                <div class="form-row">
                        <button type="submit" class="btn btn-primary mb-12">Confirmer la remise</button>
                </div>


            </form>
        </div>
    </div>
    <!-- Modal -->

@endsection
