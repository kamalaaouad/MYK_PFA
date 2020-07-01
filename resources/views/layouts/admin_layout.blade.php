<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <link
        rel="stylesheet"
        href="{{asset('https://fonts.googleapis.com/css?family=Roboto:400,700')}}"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="{{ asset('css/a_bootstrap.min.css') }}" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="{{ asset('css/templatemo-style.css') }}">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body id="reportsPage">
<div class="" id="home">
    <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
            <a class="navbar-brand" href="
            @if (auth()->user()->hasRole('superadministrator'))
            {{url('index')}}
            @endif
            ">
                @if(auth()->user()->hasRole('superadministrator'))
                <h1 class="tm-site-title mb-0">MYK ADMIN</h1>
                    @else
                    <h1 class="tm-site-title mb-0">MYK TRANSPORT</h1>
                    @endif

            </a>
            <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars tm-nav-icon"></i>
            </button>
            @if(auth()->user()->hasRole('transporteur'))
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">


                        <li class="nav-item">
                            <a class="nav-link" href="{{route('transport')}}">
                                <i class="fas fa-truck-loading"></i>
                                A Livré
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('transport_confirm')}}">
                                <i class="fas fa-truck"></i>
                                En cours
                            </a>
                        </li>


                    </ul>
            @endif
            @if(auth()->user()->hasRole('superadministrator'))
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto h-100">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('admin')}}">
                            <i class="fas fa-tachometer-alt"></i>
                            Dashboard
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-file-alt"></i>
                            <span>
                                    Rapports <i class="fas fa-angle-down"></i>
                                </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Par jour </a>
                            <a class="dropdown-item" href="#">Par semaine </a>
                            <a class="dropdown-item" href="#">Par an </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                           <i class="fas fa-shopping-cart"></i>
                            <span>
                                    Produit <i class="fas fa-angle-down"></i>
                                </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('product.index')}}">Produits</a>
                            <a class="dropdown-item" href="{{route('brand.index')}}">Marques</a>
                            <a class="dropdown-item" href="{{route('category.index')}}">Categories</a>
                         <!--   <a class="dropdown-item" href="" >Solds</a> -->

                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('transporteur')}}">
                            <i class="fas fa-truck"></i>
                            Transport
                        </a>
                    </li>

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <!--<i class="far fa-user"></i>-->
                            <svg class="bi bi-people" width="3em" height="4em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.995-.944v-.002.002zM7.022 13h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zm7.973.056v-.002.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                            </svg>
                            <span>
                                    Listes <i class="fas fa-angle-down"></i>
                                </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('client')}}">Clients</a>
                            <a class="dropdown-item" href="{{url('transports')}}">Transports</a>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-cog"></i>
                            <span>
                                    Editer <i class="fas fa-angle-down"></i>
                                </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{route('profile')}}"><i class="far fa-user"></i> Profile</a>

                        </div>
                    </li>
                </ul>
                @endif
                <ul class="navbar-nav">

                    @auth

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <i class="fas fa-angle-down"></i> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @if(auth()->user()->hasRole('transporteur'))
                            <a class="dropdown-item" href="{{route('profile')}}">
                                <i class="fas fa-cog"></i>{{ __('Modifier profile') }}
                            </a>
                                @endif
                        </div>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>

    </nav>
    @if(session()->has('status'))
        <h3 style="color:green;text-align:center;">{{session()->get('status')}}</h3>
    @endif

    @yield('content')



    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
            <p class="text-center text-white mb-0 px-4 small">
                Copyright &copy; <b>2020</b> All rights reserved.

                Design: <a rel="nofollow noopener" href="#" class="tm-footer-link">MYK BEAUTY</a>
            </p>
        </div>
    </footer>
</div>

@yield('script')

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <!-- https://jquery.com/download/ -->
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <!-- https://momentjs.com/ -->
    <script src="{{ asset('js/Chart.min.js')}} "></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="{{ asset('js/a_bootstrap.min.js')}}"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="{{ asset('js/tooplate-scripts.js')}}"></script>
    <script src="{{asset('js/tooplate-scripts.js')}}"></script>




    <script>
        Chart.defaults.global.defaultFontColor = 'white';
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function () {
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart

            $(window).resize(function () {
                updateLineChart();
                updateBarChart();
            });
        })
    </script>
     <script>
        $(function() {
          $(".tm-product-name").on("click", function() {
            window.location.href = "edit-product.html";
          });
        });
      </script>
<script src="{{ asset('jss/jquery.min.js') }}" defer></script>

</body>

</html>

