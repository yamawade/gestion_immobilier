<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('DashboardAdmin/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('DashboardAdmin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('DashboardAdmin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('DashboardAdmin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('DashboardAdmin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('DashboardAdmin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('DashboardAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('DashboardAdmin/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('DashboardAdmin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('DashboardAdmin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('DashboardAdmin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('DashboardAdmin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('DashboardAdmin/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <h4>Gestion Immobilier</h4>
                <!-- <a href="#">
                    <img src="DashboardAdmin/images/icon/logo.png" alt="Cool Admin" />
                </a> -->
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="/admin">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="/ajoutBien">
                                <i class="fas fa-chart-bar"></i>Ajout Biens</a>
                        </li>
                        <li>
                            <a href="/listeUtilisateur">
                                <i class="fas fa-table"></i>Utilisateurs</a>
                        </li>
                        <li>
                            <a href="/statistique">
                                <i class="fas fa-chart-bar"></i>Statistiques</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{asset('DashboardAdmin/images/icon/hijab.jpg')}}" alt="" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{auth()->user()->nom}} {{auth()->user()->prenom}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{asset('DashboardAdmin/images/icon/hijab.jpg')}}" alt="" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{auth()->user()->nom}} {{auth()->user()->prenom}}</a>
                                                    </h5>
                                                    <span class="email">{{auth()->user()->email}}</span>
                                                    
                                                </div>
                                            </div>
                                            
                                            <div class="account-dropdown__footer">
                                                <a href="#" onclick="document.getElementById('form-logout').submit()">
                                                    <form action="/deconnexionUser" method="post" id="form-logout">@csrf</form>
                                                    <i class="zmdi zmdi-power"></i>Logout
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                       @yield('content')
                       
                        
                     </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('DashboardAdmin/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('DashboardAdmin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('DashboardAdmin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('DashboardAdmin/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('DashboardAdmin/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('DashboardAdmin/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('DashboardAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('DashboardAdmin/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('DashboardAdmin/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('DashboardAdmin/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('DashboardAdmin/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('DashboardAdmin/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('DashboardAdmin/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('DashboardAdmin/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
