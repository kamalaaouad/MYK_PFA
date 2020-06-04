@extends('layouts.admin_layout')

@section('title')
    Transport
    @endsection

@section('content')
</style>
<div class="container tm-mt-big tm-mb-big" >
  
    <div class="row">
      
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
              <div class="jumbotron">
                <h1 style="color:white">Ajouter un transpoteur</h1>
              </div>
       
<form>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="nom">Nom</label>
        <input type="text" class="form-control " id="nom" placeholder="nom"  required style="background-color: white;color:black;">
      </div>
      <div class="col-md-4 mb-3">
        <label for="prenom">Prenom</label>
        <input type="text" class="form-control" id="prenom" placeholder="Last name"  required style="background-color: white;color:black;">
       
      </div>
      <div class="col-md-4 mb-3">
        <label for="username">Username</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" id="username">@</span>
          </div>
          <input type="text" class="form-control" id="username" placeholder="Username" aria-describedby="inputGroupPrepend3" required style="background-color: white;color:black;">
        </div>
      </div>
    </div>
    
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="tel">Tél</label>
        <input type="tel" class="form-control " id="tel" placeholder="+212 600 000 000" required style="background-color: white;color:black;">
        {{-- is-invalid --}}
        {{-- <div class="invalid-feedback">
          Please provide a valid state.
        </div> --}}
      </div>
      <div class="col-md-4 mb-3">
        <label for="ville">Ville</label>
        <input type="text" class="form-control " id="ville" placeholder="ville" required style="background-color: white;color:black;">
        {{-- <div class="invalid-feedback">
          Please provide a valid city.
        </div> --}}
      </div>
      <div class="col-md-4 mb-3">
        <label for="region">Region</label>
        <input type="text" class="form-control " id="region" placeholder="region" required style="background-color: white;color:black;">
        {{-- is-invalid --}}
        {{-- <div class="invalid-feedback">
          Please provide a valid state.
        </div> --}}
      </div>
      <div class="col-md-3 mb-3">
        <label for="postal">Code postal</label>
        <input type="text" class="form-control " id="postall" placeholder="ex : 40000" required style="background-color: white;color:black;">
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