<?php
session_start();
if (isset($_POST['submit'])) {
    $id = $_GET['dataSelect'];
    $username = $_GET['username'];
    $bilSesi = $_POST['bilSesi'];
    $laporan = $_POST['laporan'];


    $con = mysqli_connect('localhost', 'root', '', 'bookingcalendar');
    $query = "SELECT * FROM temujanji WHERE id=$id";
    $result = mysqli_query($con, $query);

    $rows = mysqli_fetch_assoc($result);
    $nama = $rows['nama'];
    $noPendaftaran = $rows['noPendaftaran'];
    $tarikh = $rows['tarikh'];
    $masa = $rows['masa'];
    $namaPA = $rows['namaPA'];


    $query2 = "SELECT * FROM rujukan";
    $result2 = mysqli_query($con, $query2);
    $rows2 = mysqli_fetch_assoc($result2);
    $noKP = $rows2['noKP'];

    $sql = "INSERT INTO laporan_kemajuan(nama, noKP, tarikh, masa, bilSesi, laporan) VALUES(?,?,?,?,?,?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param('ssssss', $nama, $noKP, $tarikh, $masa, $bilSesi, $laporan);
    $stmt->execute();

    $_SESSION['nama'] = $nama;
    $_SESSION['noPendaftaran'] = $noPendaftaran;
    $_SESSION['noKP'] = $noKP;
    $_SESSION['tarikh'] = $tarikh;
    $_SESSION['masa'] = $masa;
    $_SESSION['bilSesi'] = $bilSesi;
    $_SESSION['laporan'] = $laporan;
    $_SESSION['namaPA'] = $namaPA;

    header("Location: laporan_kemajuan3.php");

    /*$con3 =  mysqli_connect('localhost', 'root', '', 'db_user');
    $query3 = "SELECT * FROM users WHERE user_name=$namaPA";
    $result3 = mysqli_query($con3, $query3);
    $rows3 = mysqli_fetch_assoc($result3);
    $chatId = $rows3['chat_id']; */
}
