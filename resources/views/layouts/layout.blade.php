<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>    @yield('title')    </title>
    @yield('links')
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Nunito')}}" rel="stylesheet">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">




    <!--[if lt IE 9]>

    <script src="{{asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}" ></script>
    <script src="{{asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>

    <![endif]-->

</head>

<body>
<!-- Start Main Top -->
<div class="main-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="custom-select-box">
                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
                        <option selected> DH</option>
                       <!-- <option>$ USD</option>
                        <option>€ EUR</option>-->
                    </select>
                </div>
                <div class="right-phone-box">
                    <p>Call US : <a href="#"> + 212 649 563 836</a></p>
                </div>

                <!-- </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"> -->
                <!--<div class="login-box">
                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="Sign In">
                        <option>S'inscrire ici</option>
                        <option>Se connecter</option>
                    </select>
                </div>-->
                <div class="our-link ">
                    <ul>
                        <li><a href="#"><i class="fas fa-location-arrow"></i> Notre localisation</a></li>
                        <li><a href="{{route('contact.create')}}"><i class="fas fa-headset"></i> Contactez-nous</a></li>
                        <li><a href="#"><i class="fa fa-user s_color"></i> Mon compte</a></li>
                        <li><a href="#"> @if(session()->has('message'))
                                    {{session('message')}}
                          @endif
                          </a></li>

                    </ul>
                </div>
                <!-- <div class="text-slid-box">
                    <div id="offer-box" class="carouselTicker">
                        <ul class="offer-box">
                            <li>
                                <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT80
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 50%! Shop Now
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
                            </li>
                            <li>
                                <i class="fab fa-opencart"></i> Off 50%! Shop Now
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- End Main Top -->

<!-- Start Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{url('index')}}" ><!--<img src="" class="logo" alt=""> --><h1 style="font-size: 60px;"><font style="color:black;">M</font><font style="color:#bd5c07;">Y</font><font style="color:black;">K</font></h1></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="dropdown">
                        <a href="{{url('/index')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">Accueil</a>
                    </li>
                    <li class="dropdown">
                        <a href="{{url('/text')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">Nouveautés</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Magasin</a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('shop_product')}}">Tout les produits</a></li>
                            <li><a href="">Femme</a></li>
                            <li><a href="">Homme</a></li>
                            <li><a href="{{url('testcart')}}">Panier</a></li>
                            <li><a href="{{route('follow')}}">Suivre commande</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact-us.html">Rendez vous</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('about')}}">A propos nous</a></li>

                <li class="dropdown">
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-user s_color"></i>{{ Auth::user()->name }}<i class="fas fa-angle-down"></i> <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout')}}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{route('logout') }}" method="POST" style="display: none;">
                                   @csrf
                                </form>
                                <a class="dropdown-item" href="{{route('profile')}}">
                                    {{ __('Modifier profile') }}
                                </a>
                            </div>
                        </li>

                    @endguest
                </ul>
                </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    <li class="side-menu">
                        <a href="#">
                            <i class="fa fa-shopping-bag"></i>
                            <span class="badge">
                                {{ session()->has('card') ? session()->get('card')->totalQty : '0' }}</span>
                            <p>Mon panier</p>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
        <div class="side">

            {{$cart = new App\Card(session()->get('card'))}}
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <li class="cart-box">
                @if(count($cart->items) != 0 )
                    <ul class="cart-list">
                        @foreach($cart->items as $prodct)
                            <li>
                                <a href="#" class="photo"><img src="{{asset('image/instagram/'.$prodct['image'])}}" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">{{$prodct['name']}} </a></h6>
                                <p>{{$prodct['quantity']}}x - <span class="price">{{$prodct['price_Unit']}} DHs</span></p>
                            </li>
                        @endforeach
                        <li class="total">
                            <a href="{{url('testcart')}}" class="btn btn-default hvr-hover btn-cart">Voir Panier</a>
                            <span class="float-right"><strong>Total</strong>: {{ceil($cart->totalPrice)}}DHs</span>
                        </li>
                    </ul>
                @else
                    <p>There are no items in the cart</p>
                @endif
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

        @yield('content')
    <!-- Start Instagram Feed  -->
        <div class="instagram-box">
            <div class="main-instagram owl-carousel owl-theme">
                <div class="item">
                    <div class="ins-inner-box">
                        <img src="{{asset('image/instagram/6.jpg')}}" alt="" />
                        <div class="hov-in">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="ins-inner-box">
                        <img src="{{asset('image/instagram/3.jpg')}}" alt="" />
                        <div class="hov-in">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="ins-inner-box">
                        <img src="{{asset('image/instagram/2.jpg')}}" alt="" />
                        <div class="hov-in">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="ins-inner-box">
                        <img src="{{asset('image/instagram/1.jpg')}}" alt="" />
                        <div class="hov-in">
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Instagram Feed  -->


        <!-- Start Footer  -->
        <footer>
            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-top-box">
                                <h3>Temps de travail</h3>
                                <ul class="list-time">
                                    <li>Lundi - Vendredi: 09.00 à 20.00pm</li> <li>Saturday: 11.00 à 22.00</li> <li>Dimanche: <span>Fermé</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-top-box">
                                <h3>Newsletter</h3>
                                <form class="newsletter-box">
                                    <div class="form-group">
                                        <input class="" type="email" name="Email" placeholder="Address Email*" />
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <button class="btn hvr-hover" type="submit">soumettre</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-top-box">
                                <h3>Réseaux sociaux</h3>
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-widget">
                                <h4>A propos MYK Store</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-link">
                                <h4>Information</h4>
                                <ul>
                                    <li><a href="#">A propos</a></li>
                                    <li><a href="#">Service client</a></li>
                                    <li><a href="#">Notre localisation</a></li>
                                    <li><a href="#">Conditions generals</a></li>
                                    <li><a href="#">Données personnelles</a></li>
                                    <li><a href="#">Information de livraison</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-link-contact">
                                <h4>Contactez-nous</h4>
                                <ul>
                                    <li>
                                        <p><i class="fas fa-map-marker-alt"></i>Address: 05 lot bouizgaren, <br> Route de Safi,<br> Marrakech 40000</p>
                                    </li>
                                    <li>
                                        <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+ 212 644 737 830">+ 212 644 737 830</a></p>
                                    </li>
                                    <li>
                                        <p><i class="fas fa-envelope"></i>Email: <a href="Email:Emsi2020@gmail.com">Emsi2020@gmail.com</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer  -->

        <!-- Start copyright  -->
        <div class="footer-copyright">
            <p class="footer-company">All Rights Reserved. &copy; 2020 <a href="{{url('index')}}">MYK BEAUTY</a></p>
        </div>
        <!-- End copyright  -->

        <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

        <!-- ALL JS FILES -->
        <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- ALL PLUGINS -->
        <script src="{{asset('js/jquery.superslides.min.js')}}"></script>
        <script src="{{asset('js/bootstrap-select.js')}}"></script>
        <script src="{{asset('js/inewsticker.js')}}"></script>
        <script src="{{asset('js/bootsnav.js.')}}"></script>
        <script src="{{asset('js/images-loded.min.js')}}"></script>
        <script src="{{asset('js/isotope.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/baguetteBox.min.js')}}"></script>
        <script src="{{asset('js/jquery-ui.js')}}"></script>
        <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
        <script src="{{asset('js/form-validator.min.js')}}"></script>
        <script src="{{asset('js/contact-form-script.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
        <script src="{{asset('jss/jquery.min.js')}}"></script>

</body>

</html>
