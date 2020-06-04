@extends('layouts.admin_layout')

@section('title')
     Solds
    @endsection

@section('content')
<div class="container mt-5">
    <div class="row tm-content-row">
      <div class="jumbotron">
        <h1 style="color:white;text-align:center;">mise a jour des Solds</h1>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-products" style="min-height:0px;">
          <div class="tm-product-table-container">
            <table class="table table-hover tm-table-small tm-product-table">
              <thead>
                <tr>
                  {{-- <th scope="col">&nbsp;</th> --}}
                  <th scope="col">Nom de produit</th>
                  <th scope="col">Taux de remises</th>
                  <th scope="col">Description</th>
                  <th scope="col">Prix HT</th>
                  <th scope="col">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                    
                
                <tr>
                  {{-- <td scope="row"><input type="checkbox" class="checkedproduct" value="{{$product->id}}"/></td> --}}
                  <td class="tm-product-name">{{$product->name}}</td>
                    <td>{{$product->discount}} %</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}} DH</td>
                    <td>
                    <a href="#{{route('product.editDiscount',$product->id)}}" class="tm-product-delete-link" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        <i class="fas fa-pencil-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                  
                  
                  
                  
              </tbody>
            </table>
         
      </div> 
    </div>
</div>
<!-- Modal -->
{{-- @if(isset($discountedProduct)) --}}
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Taux de remise</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group mb-3" style="width:80%">
                                    <label
                                        for="discount" style="color:black;"
                                    >Taux de remise
                                    </label>
                                    <input id="discount" value="{{$discountedProduct->name ?? ''}}" name="discount" type="text" class="form-control validate" required
                                    />
                                </div>
      </div>
      <div class="modal-footer">
        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
        <button type="button" class="btn btn-primary" >Enregister</button>
      </div>
    </div>
  </div>
</div>
{{-- @endif --}}
@endsection
 