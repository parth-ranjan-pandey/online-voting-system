<?php include_once "./admin_session.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" href="../multimedia/images/icn.ico" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        li {
            list-style-type: none;
        }

        .bg-ppl {
            background-color: #980668;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="../multimedia/images/v.jpg" height="100" width="100">
        </div> -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand bg-ppl navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="./admin_panel.php" role="button">
                        <h4 class=""><strong>Admin Panel</strong></h4>
                    </a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- full screen option -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link bg-ppl">
                <img src="../multimedia/images/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><b>Online Voting System</b></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar bg-ppl">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../multimedia/images/a5.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="./admin_panel.php" class="d-block active">Admin Dashboard</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link">
                                <i class='bx bxs-bar-chart-alt-2'></i>
                                <p>
                                    Elections
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./celec.php" class="nav-link ">
                                        <i class='bx bx-plus'></i>
                                        <p>Add Election</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./melec.php" class="nav-link">
                                        <i class='bx bx-math'></i>
                                        <p>Manage Elections</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-open">
                            <a class="nav-link ">
                                <i class='bx bxs-user-detail'></i>
                                <p>
                                    Candidates
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./mcandi.php" class="nav-link ">
                                        <i class='bx bxs-user-check'></i>
                                        <p>Manage Candidates</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-open">
                            <a class="nav-link ">
                                <i class='bx bxs-user-badge'></i>
                                <p>
                                    Voters
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./mvoter.php" class="nav-link">
                                        <i class='bx bxs-user-voice'></i>
                                        <p>Manage voters</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu">
                            <a href="./votes.php" class="nav-link">
                                <i><i class='bx bx-pie-chart-alt-2'></i></i>
                                <p>
                                    Votes
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open">
                            <a class="nav-link">
                                <i class='bx bxs-user-account'></i>
                                <p>
                                    Admin
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="./manage_admin.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Manage Admin</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item menu-open">
                            <a href="../index.php" target="_blank" class="nav-link">
                                <i><i class='bx bx-street-view'></i></i>
                                <p>
                                    User View
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-open my-2">
                            <form action="#" method="post">
                                <input type="submit" class="btn btn-outline-warning btn-sm" name="lgobtn" value="Logout"></input>
                            </form>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>