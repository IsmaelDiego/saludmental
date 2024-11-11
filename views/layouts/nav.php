


    <!-- App favicon -->
    <link rel="shortcut icon" href="../plantilla/Admin/vertical/assets/images/favicon.ico">

    <!-- Plugins css -->
    <link href="../../plantilla/Admin/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="../../plantilla/Admin/plugins/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="../../plantilla/Admin/plugins/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="../../plantilla/Admin/plugins/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="../../plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../../plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
    
        <!-- Dropify css -->
        <link href="../../plantilla/Admin/plugins/dropify/dropify.min.css" rel="stylesheet" type="text/css" />



</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="header-border"></div>
        <header id="page-topbar">
            <div class="navbar-header">

                <div class="d-flex align-items-left">
                    <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                </div>

                <div class="d-flex align-items-center">



                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-bell"></i>
                            <span class="badge badge-danger badge-pill">3</span>
                        </button>
                        
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> Notifications </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small"> View All</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <img src="../plantilla/Admin/vertical/assets/images/users/avatar-2.jpg"
                                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Samuel Coverdale</h6>
                                            <p class="font-size-12 mb-1">You have new follower on Instagram</p>
                                            <p class="font-size-12 mb-0 text-muted"><i
                                                    class="mdi mdi-clock-outline"></i> 2 min ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs mr-3">
                                            <span class="avatar-title bg-success rounded-circle">
                                                <i class="mdi mdi-cloud-download-outline"></i>
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Download Available !</h6>
                                            <p class="font-size-12 mb-1">Latest version of admin is now available.
                                                Please download here.</p>
                                            <p class="font-size-12 mb-0 text-muted"><i
                                                    class="mdi mdi-clock-outline"></i> 4 hours ago</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <img src="../plantilla/Admin/vertical/assets/images/users/avatar-3.jpg"
                                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">Victoria Mendis</h6>
                                            <p class="font-size-12 mb-1">Just upgraded to premium account.</p>
                                            <p class="font-size-12 mb-0 text-muted"><i
                                                    class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2 border-top">
                                <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-down-circle mr-1"></i> Load More..
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block ml-2">
                        <button type="button" class="btn header-item waves-effect"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="../../logo-Mentalis.png"
                                alt="Header Avatar">
                            <span class="d-none d-sm-inline-block ml-1"><?php echo $_SESSION['S_USUARIO'] ?></span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                Settings
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between"
                                href="javascript:void(0)">
                                <span>Lock Account</span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between text-danger"
                                href="../../Controller/usuario/destruir_sesion.php">
                                <span>Log Out</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <div class="navbar-brand-box">
                    <a href="index.html" class="logo">
                        <i class="mdi mdi-album"></i>
                        <span>
                            Xeloro
                        </span>
                    </a>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li>
                            <a href="../home/" class="waves-effect"><i class="fas fa-tachometer-alt"></i    ><span>Dashboard</span></a>
                        </li>
                        <li class="menu-title"><b class="text-primary">FICHAS</b></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                    class="fas fa-folder-open"></i><span>Fichas</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="../paciente/"><i
                                class="fas fa-file-alt"></i> F. Pacientes</a></li>
                                <li><a href="../personal/"><i
                                class="fas fa-file-alt"></i> F. Personal</a></li>
                                <li><a href="../registrador/"><i
                                class="fas fa-file-alt"></i> F. Registrador</a>
                                <li><a href="../nominal/"><i
                                class="fas fa-file-alt"></i> F. Nominal</a>

                            </ul>
                        </li>

                        <li><a href="../consolidado/" class=" waves-effect"><i
                        class="fas fa-file-invoice"></i><span>Consolidado</span></a></li>

                        <li class="menu-title"><b class="text-primary">CONTROL</b></li>
                        
                        <li><a href="../seguimiento/" class=" waves-effect"><i
                        class="fas fa-hand-holding-heart"></i><span>Seguimiento</span></a></li>

                        <li class="menu-title"><b class="text-primary">DIAGNOSTICOS</b></li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                    class="mdi mdi-table-merge-cells"></i><span>ID01</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                
                                <li><a href="../diagnosticos/ID01-estadistica.php"><i class="fas fa-stethoscope"></i>Estadistica</a></li>
                                <li><a href="../diagnosticos/ID01-lista.php"><i class="fas fa-stethoscope"></i>Lista</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                    class="mdi mdi-table-merge-cells"></i><span>ID02</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                
                            <li><a href="../diagnosticos/ID02-estadistica.php"><i class="fas fa-stethoscope"></i>Estadistica</a></li>
                            <li><a href="../diagnosticos/ID02-lista.php"><i class="fas fa-stethoscope"></i>Lista</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                    class="mdi mdi-table-merge-cells"></i><span>ID03</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                
                            <li><a href="../diagnosticos/ID03-estadistica.php"><i class="fas fa-stethoscope"></i>Estadistica</a></li>
                            <li><a href="../diagnosticos/ID03-lista.php"><i class="fas fa-stethoscope"></i>Lista</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                    class="mdi mdi-table-merge-cells"></i><span>ID04</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                
                            <li><a href="../diagnosticos/ID04-estadistica.php"><i class="fas fa-stethoscope"></i>Estadistica</a></li>
                            <li><a href="../diagnosticos/ID04-lista.php"><i class="fas fa-stethoscope"></i>Lista</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                    class="mdi mdi-table-merge-cells"></i><span>ID05</span></a>
                            <ul class="sub-menu" aria-expanded="false">

                            <li><a href="../diagnosticos/ID05-estadistica.php"><i class="fas fa-stethoscope"></i>Estadistica</a></li>
                            <li><a href="../diagnosticos/ID05-lista.php"><i class="fas fa-stethoscope"></i>Lista</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                    class="mdi mdi-table-merge-cells"></i><span>ID06</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                
                            <li><a href="../diagnosticos/ID06-estadistica.php"><i class="fas fa-stethoscope"></i>Estadistica</a></li>
                            <li><a href="../diagnosticos/ID06-lista.php"><i class="fas fa-stethoscope"></i>Lista</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                    class="mdi mdi-table-merge-cells"></i><span>ID07</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                
                            <li><a href="../diagnosticos/ID07-estadistica.php"><i class="fas fa-stethoscope"></i>Estadistica</a></li>
                            <li><a href="../diagnosticos/ID07-lista.php"><i class="fas fa-stethoscope"></i>Lista</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                    class="mdi mdi-table-merge-cells"></i><span>ID08</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                
                            <li><a href="../diagnosticos/ID08-estadistica.php"><i class="fas fa-stethoscope"></i>Estadistica</a></li>
                            <li><a href="../diagnosticos/ID08-lista.php"><i class="fas fa-stethoscope"></i>Lista</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                    class="mdi mdi-table-merge-cells"></i><span>ID09</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                
                            <li><a href="../diagnosticos/ID09-estadistica.php"><i class="fas fa-stethoscope"></i>Estadistica</a></li>
                            <li><a href="../diagnosticos/ID09-lista.php"><i class="fas fa-stethoscope"></i>Lista</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect"><i
                                    class="mdi mdi-table-merge-cells"></i><span>ID10</span></a>
                            <ul class="sub-menu" aria-expanded="false">
                                
                            <li><a href="../diagnosticos/ID10-estadistica.php"><i class="fas fa-stethoscope"></i>Estadistica</a></li>
                            <li><a href="../diagnosticos/ID10-lista.php"><i class="fas fa-stethoscope"></i>Lista</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->