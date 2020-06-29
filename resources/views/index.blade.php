@extends('layouts.layout')

@section('title')
    Index
@endsection

@section('content')

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="image/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenue à <br>MYK</strong></h1>
                            <p class="m-b-40">Votre coin de beauté<br>Imaginez toutes les beautés </p>
                            <p><a class="btn hvr-hover" href="{{route('shop_product')}}">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="image/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Welcome To <br> MYK SHOP</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="shop.html">Shop New</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="image/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Cadeau sur mesure<br>Amour sans mesure</strong></h1>
                            <p class="m-b-40">Trouvez le cadeaux idéal<br>Decouvrez nos cadeaux</p>
                            <p><a class="btn hvr-hover" href="#">Decouvrir</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    @if($product->quantity < 20)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="image/instagram/{{$product->image}}" alt="" />
                        <a class="btn hvr-hover" href="{{route('product.show',$product->id)}}">Découvrir</a>
                    </div>
                </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
    <!-- End Categories -->

    <!--
    <div class="box-add-products">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="offer-box-products">
                        <img class="img-fluid" src="image/instagram/1.jpg" alt="" />

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="offer-box-products">
                        <img class="img-fluid" src="image/instagram/18.jpg" alt="" />

                    </div>


                </div>
            </div>
        </div>
    </div>
    -->

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">

                        <h1>Produits</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">Top featured</button>
                            <button data-filter=".best-seller">Best seller</button>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row special-list">
                @foreach($products as $produit)
                    <div class="col-lg-3 col-md-6 special-grid best-seller">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    <p class="sale">Sale</p>
                                </div>
                                <img src="{{asset('image/instagram/'.$produit->image)}}" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="{{route('product.show',$produit->id)}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="{{ route('cart.add',$produit)}}">Ajouter au panier</a>
                                </div>
                            </div>

                            <div class="why-text">
                                <h4>{{$produit->name}}</h4>
                                @if($produit->discount == 0)

                                    <h5> {{ceil($produit->price*(1+$produit->TVA))}} DHs</h5>
                                @else

                                    <h5><del style="color:black;">{{ceil($produit->price*(1+$produit->TVA))}}</del> {{ceil((($produit->price*(1+$produit->TVA))* (1-$produit->discount)))}} DH</h5>


                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach







            </div>
        </div>
    </div>
    <!-- End Products  -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Offres specials</h1>
                        <p>soldes de plus de - 30%</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($solds as $sold)
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="{{asset('image/instagram/'.$sold->image)}}" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>{{$sold->name}}</h3>
                                <p>{{$sold->description}}</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="{{ route('cart.add',$sold->id)}}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                        </svg></a></li>
                                <li><a href="{{route('product.show',$sold->id)}}"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Blog  -->

@endsection
