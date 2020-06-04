@extends('layouts.admin_layout')

@section('title')
    Update product
    @endsection


@section('content')

    <div class="container tm-mt-big tm-mb-big">
        <div class="row">
            
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
                <div class="jumbotron">
                    <h1 style="color:white;text-align:center;">Mise a jour des produits</h1>
                  </div>
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="tm-block-title d-inline-block">Modifier le produit</h2>
                        </div>
                    </div>
                    <div class="row tm-edit-product-row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <form method="POST" action="{{route('product.update',$product->id)}}" class="tm-edit-product-form">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-3">
                                    <label
                                        for="name"
                                    >Nom de produit
                                    </label>
                                    <input
                                        id="name"
                                        name="name"
                                        value="{{$product->name}}"
                                        type="text"
                                        class="form-control validate"
                                        required
                                    />
                                </div>
                                <div class="form-group mb-3">
                                    <label
                                        for="description"
                                    >Description</label
                                    >
                                    <textarea
                                        class="form-control validate"
                                        name="description"
                                        id="description"
                                        rows="3"
                                        required
                                    >{{$product->description}}</textarea>
                                </div>
                                
                                <div class="row">

                                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                                        <label
                                            for="price"
                                        >Prix
                                        </label>
                                        <input
                                            id="price"
                                            name="price"
                                            type="number"
                                            value="{{$product->price}}"
                                            placeholder="100 $"
                                            class="form-control validate"
                                            data-large-mode="true"
                                        />
                                    </div>
                                    <div><input type="hidden" name="discount" id="discount"  value="0"></div>
                                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                                        <label
                                            for="quantity"
                                        >Qté stock
                                        </label>
                                        <input
                                            id="quantity"
                                            name="quantity"
                                            value="{{$product->quantity}}"
                                            type="text"
                                            placeholder="Quantité"
                                            class="form-control validate"
                                            required
                                        />
                                    </div>
                                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                                            <label
                                                for="TVA"
                                            >TVA
                                            </label>
                                            <input
                                                id="TVA"
                                                name="TVA"
                                                type="text"
                                                value="{{$product->TVA}}"
                                                placeholder="0.2"
                                                class="form-control validate"
                                                required
                                            />
                                        </div>
                                </div>

                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                            
                            <div class="tm-product-img-dummy mx-auto">
                                <i
                                    class="fas fa-cloud-upload-alt tm-upload-icon"
                                    onclick="document.getElementById('image').click();"
                                ></i>
                            </div>
                            <div class="custom-file mt-3 mb-3">
                                <input name="image" value="{{$product->image}}" id="image" type="file" style="display:none;" />
                                <input
                                    type="button"
                                    class="btn btn-primary btn-block mx-auto"
                                    value="Choisis une image"
                                    onclick="document.getElementById('image').click();"
                                />
                            </div>
                            <div class="form-group mb-3">
                                <label
                                    for="category_id"
                                >Categorie</label
                                >
                                <select
                                    class="custom-select tm-select-accounts"
                                    id="category_id"
                                    name="category_id"
                                >
                                    <option value="{{$product->category_id}}" selected>{{\App\Category::find($product->category_id)->name}}</option>
                                    @foreach ($categories as $category)
                                    @if ($category->id != $product->category_id)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endif
                                    @endforeach
                                
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label
                                    for="brand_id"
                                >Marque</label
                                >
                                <select
                                    class="custom-select tm-select-accounts"
                                    id="brand_id"
                                    name="brand_id"
                                >
                                    <option value="{{$product->brand_id}}" selected>{{\App\Brand::find($product->brand_id)->name}}</option>
                                    @foreach ($brands as $brand)
                                    @if($brand->id != $product->brand_id)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            
                           
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block text-uppercase ">Modifier maintenant</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
{{-- 
    @section('script')


    @endsection --}}