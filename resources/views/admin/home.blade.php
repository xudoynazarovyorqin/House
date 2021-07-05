<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Building</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    
    <!-- Custom CSS -->
    <link href="{{asset('./assets/plugins/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
        <link rel="stylesheet" href="../../../css/ss.css">
        <link href="{{asset('css/style.min.css')}}" rel="stylesheet">
    <style>
        .vertical-center{
           
            width: 44%;
            top: 15%;
            left: 30%;
            margin: auto;
        }
    </style>
</head>

<body style=" box-sizing:border-box;">
    
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        
        <header class="topbar shadow" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark ">
                <div class="navbar-header" data-logobg="skin6">
                  
                    <a class="navbar-brand " style="margin-left: 27px" href="/home">
                       
                        
                        <span class="logo-text ml-4">
                            <img src="https://xonsaroy.uz/logo-1.png" style="width:150px; margin:auto" alt="homepage" class="dark-logo" />
                        </span>
                    </a>

                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i>
                    </a>

                </div>

                    <ul class="navbar-nav float-end">
                        <li class="nav-item ">
                            <h5><a  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();" id="navbarDropdown" >
                                    logout
                            </a></h5>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>

                </nav>
        </header>
        <aside class="left-sidebar shadow-lg mr-3" data-sidebarbg="skin6">

            <div class="scroll-sidebar">

                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="/houses" aria-expanded="false">
                            <i class="me-3 fas fa-building"></i><span class="hide-menu">Uylar</span></a>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                            href="/clients" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i>
                            <span class="hide-menu">Mijozlar</span></a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper" style="">
            @yield('content')
        </div>
    </div>
    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    <script src="../assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="{{asset("js/waves.js")}}"></script>
    <script src="{{asset("js/sidebarmenu.js")}}"></script>
    <script src="{{asset("js/custom.js")}}"></script>
    <script src="{{asset("../assets/plugins/flot/jquery.flot.js")}}"></script>
    <script src="{{asset("../assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js")}}"></script>
    <script src="{{asset("js/pages/dashboards/dashboard1.js")}}"></script>
</body>

</html>