@extends('layouts.admin_layout')

@section('title')
    Produits
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row tm-content-row">
            <div class="jumbotron">
                <h1 style="color:white;text-align:center;">Clients</h1>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-products" style="min-height:0px;">
                    <div class="tm-product-table-container">
                        <table class="table table-hover tm-table-small tm-product-table">
                            <thead>
                            <tr>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">Nom </th>
                                <th scope="col">E-mail</th>
                                <th scope="col"> Adresse</th>
                                <th scope="col">telephone</th>

                                <th scope="col">&nbsp;</th>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($clients as $product)
                                @if($product->hasRole('user'))
                                <tr>
                                    <td scope="row"><input type="checkbox" class="checkedproduct" value="{{$product->id}}"/></td>
                                    <td class="tm-product-name">{{$product->name}}</td>
                                    <td>{{$product->email}}</td>
                                    <td>{{$product->address}} DH</td>
                                    <td> {{$product->tel}} </td>

                                    <td>
                                        <form method="POST" action="{{route('deleted',$product->id)}}" class="tm-edit-product-form" >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="cursor: pointer;" class="tm-product-delete-link">
                                                <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                            </button>
                                        </form>
                                    </td>
                                 </tr>
                                @endif
                    @endforeach
                    </tbody>
                    </table>
                </div>
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
