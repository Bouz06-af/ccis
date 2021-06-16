<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <title>CCIS || Admin Panel</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="{{asset('/images/ccis.png')}}" />
        <script data-search-pseudo-elements defer src="{{ asset('js/js/all.min.js') }}"></script>
        <script src="{{ asset('/js/js/feather.min.js') }}"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        
        <script src="https://unpkg.com/feather-icons"></script>
    </head>
    <body class="nav-fixed">
        <nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
            <a class="navbar-brand d-none d-sm-block" href="#">Espace Admin</a><button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i data-feather="menu"></i></button>
            <ul class="navbar-nav align-items-center ml-auto">
                
             </ul>
        </nav>
        

        <!--Side Nav-->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    <div class="sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">
                            <a class="nav-link collapsed pt-4" href="/cooperatives/admin">
                                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="/ressortissants" ><div class="nav-link-icon"><i data-feather="tool"></i></div>
                                Ressortissant
                            </a>
                            <a class="nav-link" href="/associations" ><div class="nav-link-icon"><i data-feather="briefcase"></i></div>
                                Associations
                            </a>
                            <a class="nav-link" href="/outilsinfos" ><div class="nav-link-icon"><i data-feather="book-open"></i></div>
                                Chambre Professionnelle
                            </a>
                            <a class="nav-link collapsed"  href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"><div class="nav-link-icon"><i data-feather="link"></i></div>
                            Coopérative
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                                    <a class="nav-link" href="/cooperatives">Toutes les coopératives </a>
                                    <a class="nav-link" href="/cooperatives/create">Ajouter une coopérative </a>
                                    <a class="nav-link" href="{{'/cooperatives/search/Tetouan'}}">Tétouan </a>
                                    <a class="nav-link" href="/cooperatives/search/Fnideq">Fnideq</a>
                                    <a class="nav-link" href="/cooperatives/search/Mdiq">Mdiq</a>
                                    <a class="nav-link" href="/cooperatives/search/Chefchaouen"> Chefchaouen </a>
                                    <a class="nav-link" href="/cooperatives/search/Ouazzane"> Ouazzane </a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed"  href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts"><div class="nav-link-icon"><i data-feather="mail"></i></div>
                            Outils
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts1" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                                    <a class="nav-link" href="/acceuils">Acceuil </a>
                                    <a class="nav-link" href="{{'/suiviclients'}}">Suivi client </a>
                                  
                                   </nav>
                            </div>
                            <a class="nav-link collapsed"  href="javascript:void(0);" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts"><div class="nav-link-icon"><i data-feather="info"></i></div>
                            Infos
                                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts2" data-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavLayout">
                                    <a class="nav-link" href="/personnephysiques"> Personnes Physiques </a>
                                    <a class="nav-link" href="{{'/personnemorals'}}"> Personnes Morals </a>
                                   </nav>
                            </div>
                            <a class="nav-link" href="/statistiques" ><div class="nav-link-icon"><i data-feather="database"></i></div>
                            Statistiques
                            </a>
                           
                        </div>
                    </div>
                  
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                @yield('content')
                </main>

                <!--start footer-->
                <footer class="footer mt-auto footer-light">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 small">Copyright &#xA9;2021</div>
                            <div class="col-md-6 text-md-right small">
                                <a href="#">Privacy Policy</a>
                                &#xB7;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!--end footer-->
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <!--Script JS-->
        <script src="{{ asset('js/js/jquery-3.4.1.min.js')}}"></script>
        <script src="{{ asset('js/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('js/js/scripts.js')}}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        

    <script>
        AOS.init();
    </script>
    <script>
      feather.replace()
    </script>
    </body>
</html>
