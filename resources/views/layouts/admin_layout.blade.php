<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:400,700"
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
            <a class="navbar-brand" href="{{url('index')}}">
                <h1 class="tm-site-title mb-0">MYK ADMIN</h1>
            </a>
            <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars tm-nav-icon"></i>
            </button>

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
                            <a class="dropdown-item" href="{{route('product.discountShow')}}" >Solds</a>

                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('transport.index')}}">
                            <i class="fas fa-truck"></i>
                            Transport
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="accounts.html">
                            <i class="far fa-user"></i>
                            Comptes
                        </a>
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
                            <a class="dropdown-item" href="#">Profile</a>

                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link d-block" href="login.html">
                            Admin, <b>Se deconnecter</b>
                        </a>
                    </li>
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

</body>

</html>

