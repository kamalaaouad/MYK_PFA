@extends('layouts.admin_layout')

@section('title')
    Marques
    @endsection

@section('content')
<div class="container mt-5" style="width: 50%">
    <div class="row tm-content-row">
      <div class="jumbotron">
        <h1 style="color:white;">Marques</h1>
      </div>
    </div>
    
    <form method="POST" action="{{route('brand.store')}}" class="tm-edit-product-form">
      @csrf
      <div class="form-group mb-3  ">
          <label for="brand"><strong>Nom de la marque</strong></label>
          <input id="brand" name="brand" type="text"
      class="form-control validate" required  />
      </div>
      <div class="col-14">
          <button type="submit" class="btn btn-primary btn-block text-uppercase mb-3">
              Ajouter une marque
          </button>
      </div>
    </form>

    
</div>
      <div class="container mt-5" style="width:50%">
        <div class="tm-bg-primary-dark tm-block tm-block-product-categories" style="min-height:0px;">
          <h2 class="tm-block-title">Nos marques</h2>
          <div class="tm-product-table-container">
            <table class="table tm-table-small tm-product-table">
              <tbody>
                @foreach($brands as $brand)
                <tr>
                  <td class="tm-product-name">{{$brand->name}}</td>
                  <td class="text-right">
                  <a href="{{route('brand.edit',$brand->id)}}" class="tm-product-delete-link">
                      <i class="fas fa-pencil-alt tm-product-delete-icon"></i>
                    </a>
                  </td>
                  <td>
                    <form method="POST" action="{{route('brand.destroy',$brand->id)}}" class="tm-edit-product-form" >
                      @csrf
                      @method('DELETE')
                          <button type="submit" style="cursor: pointer;" class="tm-product-delete-link">
                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                          </button>
                      </div>
                    </form>                      
                  </td>
                </tr>
                @endforeach
                  
              </tbody>
            </table>
        </div>
        
    </div>
</div>

@endsection
{{-- @section('script')

@endsection --}}
