@extends('layouts.admin_layout')

@section('title')
    Transport
@endsection


@section('content')
<div class="container tm-mt-big tm-mb-big" >

    <div class="row">

        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">

            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
              <div class="jumbotron">
                <h1 style="color:white">Ajouter un transpoteur</h1>
          </div>

    <form method="POST" action="{{route('')}}" >
      @csrf
        <div class="form-row">
          <div class="col-md-6 mb-6">
            <label for="nom">Nom</label>
            <input type="text" class="form-control " name="name" id="nom" placeholder="nom"  required style="background-color: white;color:black;">
          </div>
          {{-- <div class="col-md-4 mb-3">
            <label for="prenom">Prenom</label>
            <input type="text" class="form-control" id="prenom" placeholder="Last name"  required style="background-color: white;color:black;">

          </div> --}}
          <div class="col-md-6 mb-6">
            <label for="username">Mail</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="mail">@</span>
              </div>
              <input type="mail" class="form-control" name="mail" id="mail" placeholder="exemple@exemple.com" aria-describedby="inputGroupPrepend3" required style="background-color: white;color:black;">
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-6 mb-6">
            <label for="tel">Tél</label>
            <input type="tel" class="form-control " name="tel" id="tel" placeholder="+212 600 000 000" required style="background-color: white;color:black;">
            {{-- is-invalid --}}
            {{-- <div class="invalid-feedback">
              Please provide a valid state.
            </div> --}}
          </div>
          <div class="col-md-6 mb-6">
            <label for="adress">Adress</label>
            <input type="text" class="form-control " name="address" id="adress" placeholder="adress" required style="background-color: white;color:black;">
            {{-- <div class="invalid-feedback">
              Please provide a valid city.
            </div> --}}
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-6">
            <label for="password">Mot de pass </label>
            <input type="password" class="form-control " name="password" id="password" required style="background-color: white;color:black;">
            {{-- is-invalid --}}
            {{-- <div class="invalid-feedback">
              Please provide a valid state.
            </div> --}}
          </div>
          <div class="col-md-6 mb-6">
            <label for="password_confirmation">Confirmation de mot de pass</label>
            <input type="password" class="form-control " name="password_confirmation" id="password_confirmation"  required style="background-color: white;color:black;">
            {{-- <div class="invalid-feedback">
              Please provide a valid zip.
            </div> --}}
          </div>
        </div>
        </div>
        <button class="btn btn-primary" type="submit">Ajouter</button>
  </form>
          </div>
        </div>
    </div>
</div>

@endsection
