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
    <link href="DashboardAdmin/css/font-face.css" rel="stylesheet" media="all">
    <link href="DashboardAdmin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="DashboardAdmin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="DashboardAdmin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="DashboardAdmin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="DashboardAdmin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="DashboardAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="DashboardAdmin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="DashboardAdmin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="DashboardAdmin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="DashboardAdmin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="DashboardAdmin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="DashboardAdmin/css/theme.css" rel="stylesheet" media="all">

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
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="/ajoutBien">
                                <i class="fas fa-chart-bar"></i>Ajout Biens</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-table"></i>Utilisateurs</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="far fa-check-square"></i>Commentaire</a>
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
                                            <img src="DashboardAdmin/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{auth()->user()->nom}} {{auth()->user()->prenom}}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="DashboardAdmin/images/icon/avatar-01.jpg" alt="John Doe" />
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
                        
                    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1>Liste des biens</h1>
                     <hr>
                    <a href="/ajoutBien" class="btn btn-primary">Ajouter un bien</a>
                    <hr>
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                     @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Numéro</th>
                                <th>Nom bien</th>
                                <th>Catégorie</th>
                                <th>Adresse</th>
                                <th>Statut</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $numero = 1;
                            @endphp

                            @foreach($biens as $bien)
                            <tr>
                                <td>{{$numero}}</td>
                                <td>{{$bien->nom}}</td>
                                <td>{{$bien->categorie}}</td>
                                <td>{{$bien->adresse}}</td>
                                <td>{{$bien->statut}}</td>
                                <td>
                                    <a href="/detail-bien/{{$bien->id}}" class="btn btn-success">Détails</a>
                                </td>
                            </tr>
                            @php
                            $numero++;
                            @endphp
                            @endforeach
                            
                        </tbody>
                    </table>
            </div>
   
        </div>
    </div>
                       
                        
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="DashboardAdmin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="DashboardAdmin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="DashboardAdmin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="DashboardAdmin/vendor/slick/slick.min.js">
    </script>
    <script src="DashboardAdmin/vendor/wow/wow.min.js"></script>
    <script src="DashboardAdmin/vendor/animsition/animsition.min.js"></script>
    <script src="DashboardAdmin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="DashboardAdmin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="DashboardAdmin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="DashboardAdmin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="DashboardAdmin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="DashboardAdmin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="DashboardAdmin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="DashboardAdmin/js/main.js"></script>

</body>

</html>
<!-- end document-->
