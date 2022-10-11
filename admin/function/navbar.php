<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ระบบสมัครเรียน</title>

    <!-- sweet alert js & css -->
        <!--Sweet Alert Codes-->
    <!--JQuery CDN-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--Sweet Alert CDN-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');

        * {
            font-family: 'Prompt', sans-serif;
        }

        .menus {
            transition: .2s ease-in;
        }
        .menus span{
            font-weight: 400;
        }

        .menus:hover {
            background: #872BE4;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-primary shadow-lg sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center mb-3" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ระบบสมัครเรียน</div>
            </a>

            <!-- Heading -->
            <div class="sidebar-heading text-light" style="font-weight: 400; opacity: .7;">
                ข้อมูลพื้นฐาน
            </div>
            <!-- Divider -->

            <li class="nav-item active">
                <a class="menus nav-link py-2 px-3" href="year.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>ปีการศึกษา</span>
                </a>
            </li>



            <li class="nav-item active">
                <a class="menus nav-link py-2 px-3" href="level.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>ระดับชั้น-สาขา</span>
                </a>
            </li>


            <li class="nav-item active">
                <a class="menus nav-link py-2 px-3" href="foreword.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>คำนำหน้า</span>
                </a>
            </li>

            <div class="sidebar-heading text-light mt-3" style="font-weight: 400; opacity: .7;">
                การสมัครเรียน
            </div>
            <!-- Divider -->

            <li class="nav-item active">
                <a class="menus nav-link py-2 px-3" href="allStudent.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>สมัครเรียน</span>
                </a>
            </li>


            <div class="sidebar-heading text-light mt-3" style="font-weight: 400; opacity: .7;">
                ข้อมูลผู้ใช้งาน
            </div>
            <!-- Divider -->

            <li class="nav-item active">
                <a class="menus nav-link py-2 px-3" href="account.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>ผู้ใช้งาน</span>
                </a>
            </li>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <br>

                <div class="container-fluid">


                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-3 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <div>ระบบสมัครเรียน</div>

                        <!-- Topbar Search -->
                        <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form> -->

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-center mr-2 d-none d-lg-inline text-gray-600 small">
                                        Admin System <br> big-nat@gmail.com
                                    </span>
                                    <img class="img-profile rounded-circle" src="">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <!-- <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a> -->
                                    <!-- <div class="dropdown-divider"></div> -->
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->


                