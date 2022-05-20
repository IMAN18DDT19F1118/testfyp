<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "db_user";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Failed to connect");
}




Display_rujukan.php
<?php
session_start();

include('includes/header.php');

$con = mysqli_connect('localhost', 'root', '', 'bookingcalendar');

$id = $_GET['dataSelect'];
$id = $_GET['dataSelect'];
$query = "SELECT * FROM rujukan WHERE id=$id";
$result = mysqli_query($con, $query);
if ($rows = mysqli_fetch_assoc($result)) {
    $nama = $rows['nama'];
    $noPendaftaran = $rows['noPendaftaran'];
    $noKP = $rows['noKP'];
    $sesi = $rows['sesi'];
    $noTel = $rows['noTel'];
    $penampilan = $rows['penampilan'];
    $sikap = $rows['sikap'];
    $akademik = $rows['akademik'];
    $keluarga = $rows['keluarga'];
    $kewangan = $rows['kewangan'];
}

?>
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
    table,
    th,
    td {
        border: 2px solid black;
        border-collapse: collapse;
        color: black;
    }

    tr {
        height: 30px;
    }

    th {
        background: lightgreen;
        width: 30%;
    }

    table {
        width: 100%;
        line-height: 40px;
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
        <ul style="background: purple;" class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Heading -->


            <li class="nav-item">
                <a class="nav-link" href="admin_main.php">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Halaman Utama</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="view_appointment.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Semak Temujanji</span>
                </a>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="update_attendance.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Kemaskini Kehadiran</span>
                </a>

            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="settings_user.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Tetapan Pengguna</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item">
                <a class="nav-link" href="admin_logout.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Log keluar</span>
                </a>

            </li>

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
                    <div class="col-md-6">



                        <!-- Content Row -->
                        <br><br><br>
                        <h2 style="color: black; font-size:16px;">Maklumat borang rujukan</h2><b>

                            <div class="container-fluid">
                                <table align="center">
                                    <tr>
                                        <th>Nama</th>
                                        <td><?php echo $nama; ?></td>
                                    </tr>
                                    <tr>
                                        <th>No pendaftaran</th>
                                        <td><?php echo "$noPendaftaran"; ?></td>
                                    </tr>
                                    <tr>
                                        <th>No Kad Pengenalan</th>
                                        <td><?php echo "$noKP"; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Sesi</th>
                                        <td><?php echo "$sesi"; ?></td>
                                    </tr>
                                    <tr>
                                        <th>No telefon</th>
                                        <td><?php echo "$noTel"; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Penampilan</th>
                                        <td><?php echo "$penampilan"; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Sikap</th>
                                        <td><?php echo "$sikap"; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Akademik</th>
                                        <td><?php echo "$akademik"; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Keluarga</th>
                                        <td><?php echo "$keluarga"; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kewangan</th>
                                        <td><?php echo "$kewangan"; ?></td>
                                    </tr>
                                </table>
                            </div>

                            <br><br>
                            <?php
                            echo "<td><button> <a class='button1' href='rujukan_pdf.php? data=$id'>Download PDF</a></button></td>";
                            ?>
                            <br><br>
                    </div>

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
