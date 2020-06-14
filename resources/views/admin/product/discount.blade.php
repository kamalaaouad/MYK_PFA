@extends('layouts.admin_layout')

@section('title')
    Soldes
@endsection

@section('content')

    <div class="container mt-5">
        <div class="row tm-content-row">
            <form class="form-inline">
                <div class="form-group mb-2">
                    <label for="staticEmail2" class="sr-only">nom</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="{{$toEdit->name}}">
                </div>
                <div class="form-group mb-2">
                    <label for="staticEmail2" class="sr-only">prix</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="{{$toEdit->price}} DH">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only">Remise</label>
                    <input type="number" class="form-control" id="inputPassword2" placeholder="{{$toEdit->discount}} %">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Confirmer la remise</button>
            </form>
        </div>
    </div>
    <!-- Modal -->

@endsection
