@extends('layouts.admin_layout')

@section('title')
     Produits
    @endsection

@section('content')
<div class="container mt-5">
    <div class="row tm-content-row">
      <div class="jumbotron">
        <h1 style="color:white;text-align:center;">Produits</h1>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-products" style="min-height:0px;">
          <div class="tm-product-table-container">
            <table class="table table-hover tm-table-small tm-product-table">
              <thead>
                <tr>
                  <th scope="col">&nbsp;</th>
                  <th scope="col">Nom de produit</th>
                  <th scope="col">Description</th>
                  <th scope="col">Prix HT</th>
                  <th scope="col">TVA</th>
                  <th scope="col">image</th>
                  <th scope="col">Date de creation</th>
                  <th scope="col">&nbsp;</th>
                  <th scope="col">&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                <tr>
                  <td scope="row"><input type="checkbox" class="checkedproduct" value="{{$product->id}}"/></td>
                  <td class="tm-product-name">{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}} DH</td>
                    <td>{{$product->TVA}}</td>
                    <td>{{$product->image}}</td>
                    
                    
                    <td>{{$product->created_at}}</td>
                    
                    <td>
                    <a href="{{route('product.edit',$product->id)}}" class="tm-product-delete-link">
                        <i class="fas fa-pencil-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                    <td>
                      <form method="POST" action="{{route('product.destroy',$product->id)}}" class="tm-edit-product-form" >
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
          <!-- table container -->
          <a
        href="{{route('product.create')}}"
            class="btn btn-primary btn-block text-uppercase mb-3">Ajouter nouveau produit</a>
            {{-- <button id="deleteSelection" type="submit" class="btn btn-primary btn-block text-uppercase" >
            Supprimer les produits selectionés
          </button> --}}
        </div>
      </div> 
    </div>
</div>
@endsection

@section('script')

{{-- <script>
function deleteSelection(){
  var ids=[];
  $('.checkedproduct:checkbox:checked').each(function(){
    ids.push($(this).val());
  });
  if(ids.lenght > 0){
    $.ajax({
      url:"{{route('product.deleteSelection')}}",
      method:"POST",
      data:{'id':ids}
    });
  }
}

$("#deleteSelection").click(deleteSelection());
  </script> --}}


@endsection