@extends('layouts.layout')

@section('title')
    Nos produits
@endsection

@section('content')
<div class="side">
    <a href="#" class="close-side"><i class="fa fa-times"></i></a>
    <li class="cart-box">
        <ul class="cart-list">
            <li>
                <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                <h6><a href="#">Delica omtantur </a></h6>
                <p>1x - <span class="price">$80.00</span></p>
            </li>
            <li>
                <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                <h6><a href="#">Omnes ocurreret</a></h6>
                <p>1x - <span class="price">$60.00</span></p>
            </li>
            <li>
                <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                <h6><a href="#">Agam facilisis</a></h6>
                <p>1x - <span class="price">$40.00</span></p>
            </li>
            <li class="total">
                <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                <span class="float-right"><strong>Total</strong>: $180.00</span>
            </li>
        </ul>
    </li>
</div>
<!-- End Side Menu -->
</nav>
<!-- End Navigation -->
</header>
<!-- End Main Top -->

<!-- Start Top Search -->
<div class="top-search">
<div class="container">
<div class="input-group">
    <span class="input-group-addon"><i class="fa fa-search"></i></span>
    <input type="text" class="form-control" placeholder="Search">
    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
</div>
</div>
</div>
<!-- End Top Search -->

<!-- Start All Title Box -->
<div class="all-title-box">
<div class="container">
<div class="row">
    <div class="col-lg-12">
        <h2>Shop</h2>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Shop</li>
        </ul>
    </div>
</div>
</div>
</div>
<!-- End All Title Box -->

<!-- Start Shop Page  -->
<div class="shop-box-inner">
<div class="container">
<div class="row">
    <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
        <div class="right-product-box">
            <div class="product-item-filter row">
                <div class="col-12 col-sm-8 text-center text-sm-left">
                    <div class="toolbar-sorter-right">
                        <span>Sort by </span>
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                        <option data-display="Select">Nothing</option>
                        <option value="1">Popularity</option>
                        <option value="2">High Price → High Price</option>
                        <option value="3">Low Price → High Price</option>
                        <option value="4">Best Selling</option>
                    </select>
                    </div>
                    <p>Showing all 4 results</p>
                </div>
                <div class="col-12 col-sm-4 text-center text-sm-right">
                    <ul class="nav nav-tabs ml-auto">
                        <li>
                            <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                        </li>
                        <li>
                            <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="product-categorie-box">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                        <div class="row">
                           
                            @foreach ($products as $product)
                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                <div class="products-single fix">
                                    <div class="box-img-hover">
                                        <div class="type-lb">
                                            <p class="new">New</p>
                                        </div>
                                    <img src="image/instagram/{{$product->image}}" class="img-fluid" alt="Image">
                                        <div class="mask-icon">
                                            <ul>
                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                            </ul>
                                            <a class="cart" href="#">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class="why-text">
                                        <h4>{{$product->name}}</h4>
                                        <h5>{{$product->price}} Dh</h5>
                                    </div>
                                </div>
                            </div> 
                            @endforeach   
                        </div>
                    </div>

                    <!-- product with description -->            
                        @foreach ($products as $product)
                        <div class="list-view-box">
                            <div class="row">
                                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                    <div class="products-single fix">
                                        <div class="box-img-hover">
                                            <div class="type-lb">
                                                <p class="sale">Sale</p>
                                            </div>
                                            <img src="image/instagram/{{$product->image}}" class="img-fluid" alt="Image">
                                            <div class="mask-icon">
                                                <ul>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                    <div class="why-text full-width">
                                        <h4>{{$product->name}}</h4>
                                        <h5> <del>1000.00 Dh</del>{{$product->price}} Dh</h5>
                                        <p>{{$product->description}}</p>
                                        <a class="btn hvr-hover" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
        <div class="product-categori">
            <div class="search-product">
                <form action="#">
                    <input class="form-control" placeholder="Search here..." type="text">
                    <button type="submit"> <i class="fa fa-search"></i> </button>
                </form>
            </div>
            <div class="filter-sidebar-left">
                <div class="title-left">
                    <h3>Filtrer par<i class="fas fa-paint-roller    "></i></h3>
                </div>
                <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                    <div class="list-group-collapse sub-men">
                        <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Categorie <small class="text-muted">(100)</small>
                    </a>
                        <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                            <div class="list-group">
                                @foreach ($categories as $category)
                                <a href="#" class="list-group-item list-group-item-action">{{$category->name}}<small class="text-muted">(10)</small></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="list-group-collapse sub-men">
                        <a class="list-group-item list-group-item-action" href="#sub-men2" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men2">Marques 
                    <small class="text-muted">(50)</small>
                    </a>
                        <div class="collapse" id="sub-men2" data-parent="#list-group-men">
                            <div class="list-group">
                                @foreach ($brands as $brand)
                                <a href="#" class="list-group-item list-group-item-action">{{$brand->name}}<small class="text-muted">(10)</small></a>
                                @endforeach                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
            <div class="filter-price-left">
                <div class="title-left">
                    <h3>Price</h3>
                </div>
                <div class="price-box-slider">
                    <div id="slider-range"></div>
                    <p>
                        <input type="text" id="amount" readonly style="border:0; color:#fbb714; font-weight:bold;">
                        <button class="btn hvr-hover" type="submit">Filter</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- End Shop Page -->
@endsection