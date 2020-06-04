@extends('layouts.admin_layout')

@section('title')
    Categories
    @endsection

@section('content')
<div class="container mt-5" style="width: 50%">
    <div class="row tm-content-row">
        <div class="jumbotron">
            <h1 style="color:white;text-align:center;">Mise a jour des categories</h1>
          </div>
    </div>
        <form method="POST" action="{{route('category.update',$category->id)}}" class="tm-edit-product-form" style="margin-top: 15px;">
          @csrf
          @method('PUT')
          <div class="form-group mb-3  ">
              <label for="brand"><strong>Nom de la categorie</strong></label>
              <input id="category" name="category" type="text"
                  class="form-control validate" required value="{{$category->name}}"/>
          </div>
          <div class="col-14">
              <button type="submit" class="btn btn-primary btn-block text-uppercase mb-3">
                  Modifier la categorie
              </button>
          </div>
      </form>

                
                  
              </tbody>
            </table>
        </div>
        
    </div>
</div>

@endsection
{{-- @section('script')

@endsection --}}
