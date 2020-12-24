<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description"
        content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">



    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
    <script src="{{asset('asset/jquery/dist/jquery.js')}}"></script>
    
    <link rel="stylesheet" href="{{asset('asset/boostrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('admin_css/sleek.css')}}">

</head>


<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <div class="wrapper">
        <aside class="left-sidebar bg-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <!-- Aplication Brand -->
                <div class="app-brand">
                    <a href="/index.html" title="Sleek Dashboard">
                        <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"
                            width="30" height="33" viewBox="0 0 30 33">
                            <g fill="none" fill-rule="evenodd">
                                <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                                <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                            </g>
                        </svg>
                        <span class="brand-name text-truncate">Addicting Game</span>
                    </a>
                </div>
                <!-- begin sidebar scrollbar -->
                <div class="sidebar-scrollbar">

                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span class="nav-text">User</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="dashboard" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li>
                                        <a class="sidenav-item-link" href="{{URL::to('admin/all-user')}}">
                                            <span class="nav-text">Xem tất cả người sử dụng</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#app" aria-expanded="false" aria-controls="app">
                                <i class="mdi mdi-pencil-box-multiple"></i>
                                <span class="nav-text">Danh Mục</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="app" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li>
                                        <a class="sidenav-item-link" href="{{URL::to('admin/allcategories')}}">
                                            <span class="nav-text">Xem Danh Mục</span>

                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                data-target="#components" aria-expanded="false" aria-controls="components">
                                <i class="mdi mdi-folder-multiple-outline"></i>
                                <span class="nav-text">Game</span> <b class="caret"></b>
                            </a>
                            <ul class="collapse" id="components" data-parent="#sidebar-menu">
                                <div class="sub-menu">
                                    <li>
                                        <a class="sidenav-item-link" href="alert.html">
                                            <span class="nav-text">Game</span>

                                        </a>
                                    </li>
                                    <li>
                                        <a class="sidenav-item-link" href="badge.html">
                                            <span class="nav-text">Thêm Game</span>
                                        </a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>

                </div>


            </div>
        </aside>


        <div class="page-wrapper">
            <!-- Header -->
            <header class="main-header " id="header">
                <nav class="navbar navbar-static-top navbar-expand-lg">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <!-- search form -->
                    <div class="search-form d-none d-lg-inline-block">

                    </div>

                    <div class="navbar-right ">
                        <ul class="nav navbar-nav">

                            <!-- User Account -->
                            <li class="dropdown user-menu">
                                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <img src="https://i.pinimg.com/736x/27/bc/7b/27bc7b1d116c83824fbdf4547308a296.jpg" class="user-image" alt="User Image" />
                                    <span class="d-none d-lg-inline-block">Duy Phúc</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <!-- User image -->
                                    <li class="dropdown-header">
                                        <img src="https://i.pinimg.com/736x/27/bc/7b/27bc7b1d116c83824fbdf4547308a296.jpg" class="img-circle" alt="User Image" />
                                        <div class="d-inline-block">
                                            Duy Phúc 
                                        </div>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a href="index.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>


            </header>
            <div class="content-wrapper">
                @section('content')
                @show
            </div>

        </div>
    </div>

    
    <script src="{{asset('asset/slimscrollbar/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('js/jekyll-search.min.js')}}"></script>

    <script src="{{asset('js/sleek.bundle.js')}}"></script>
</body>

</html>