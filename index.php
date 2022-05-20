<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Unit Pengurusan Psikologi PTSS</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


</head>

<style>
    h2,
    p {
        color: black;
    }

    table,
    th,
    td {
        border: 2px solid black;
        border-collapse: collapse;
        color: black;
    }

    th {
        background: skyblue;
    }

    tr {
        height: 30px;
    }

    nav-item dropdown {
        position: relative;
    }

    .navbar ul.navbar-nav li.nav-item.ets-right-0 .dropdown-menu {
        left: auto;
        right: 0;
        position: absolute;

    }
</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-home"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Halaman Utama</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Heading -->


            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Halaman Utama</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="login.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Log masuk</span>
                </a>

            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <br>

                    <h2>Unit Pengurusan Psikologi Politeknik Tuanku Syed Sirajuddin</h2>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">





                        <!-- Nav Item - Messages -->

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->


                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1><img src="banner.jpg" alt="PTSS" style="width: 120%;  height: 120%;"></h1><br>

                    </div>

                    <!-- Content Row -->
                    <div class="row1">

                        <b>
                            <p1 style="color: black; font-size:16px;">Selamat datang ke Unit Pengurusan Psikologi Politeknik Tuanku Syed Sirajuddin.</p1>
                        </b>
                        <br><br><br>
                    </div>

                    <div id="row2">
                        <h2>PENGENALAN</h2><br>
                        <p>Unit Pengurusan Psikologi (UPPsi) merupakan unit sokongan di bawah Timbalan Pengarah Sokongan Akademik, Politeknik Tuanku Syed Sirajuddin (PTSS).
                            UPPsi berperanan membantu ke arah perkembangan warga Politeknik (kakitangan dan pelajar) yang sejahtera emosi, pemikiran, fizikal, spiritual dan
                            sosial agar dapat berfungsi dengan baik dan dapat menyumbang ke arah kecemerlangan Politeknik.</p>
                    </div>
                    <br><br><br>
                    <p>Sila log masuk dahulu sebelum melakukan tempahan</p><br>
                    <?php include('calendar2.php'); ?><br><br>
                    <h4>Info</h4>
                    <p><button id="btn1" style="background: #e74a3b; color: white;">T/T</button> - Tidak Tersedia</p>
                    <p><button id="btn1" style="background: #4e73df; color: white;">T/P</button> - Tempahan Penuh</p>
                    <p><button id="btn2" style="background: #1cc88a; color: white;">Tempah</button> - Tempah</p>
                    <br><br><br>
                    <p>Senarai pegawai psikologi</p>
                    <table style="width:100%">
                        <tr>
                            <th style="width:5%">Bil.</th>
                            <th>Nama</th>
                            <th>Jawatan</th>
                            <th>No Telefon</th>
                            <th>Email</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Wan Kamariah binti Wan Mat</td>
                            <td>Ketua Unit Pegawai Psikologi</td>
                            <td>04 988 6208</td>
                            <td>kamaria@ptss.edu.my</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Norzila binti Mhd Noor</td>
                            <td>Pegawai Psikologi</td>
                            <td>04 988 6205</td>
                            <td>norzila@ptss.edu.my</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Raja Rabiaatum Adawiah binti Raja Mamat</td>
                            <td>Pegawai Psikologi</td>
                            <td>04 988 1100</td>
                            <td>rabiaatum@ptss.edu.my</td>
                        </tr>
                    </table>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Unit Pengurusan Psikologi&copy; Politeknik Tuanku Syed Sirajuddin</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Click "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>


</body>

</html>
