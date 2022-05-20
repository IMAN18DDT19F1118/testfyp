<?php
session_start();
$nama = $_SESSION['nama'];
$noPendaftaran = $_SESSION['noPendaftaran'];
$noKP = $_SESSION['noKP'];
$tarikh = $_SESSION['tarikh'];
$masa = $_SESSION['masa'];
$bilSesi = $_SESSION['bilSesi'];
$laporan = $_SESSION['laporan'];
$namaPA = $_SESSION['namaPA'];

$con = mysqli_connect('localhost', 'root', '', 'db_user');
    $query = "SELECT * FROM users WHERE user_name='$namaPA'";
    $result = mysqli_query($con, $query);

    $rows = mysqli_fetch_assoc($result);
    $chatId = $rows['chat_id'];

$token = "2043754739:AAGhmCVHb9tLwKqbVcBXpXjs8djknl4EsS8";

$data = [
    'text' => 'Pelajar bernama ' . $nama . ",\nNo pendaftaran: " . $noPendaftaran . ",\nNo Kad Pengenalan: " . $noKP . ",\nTarikh: " . $tarikh . ",\nMasa: " . $masa . ",\nBilangan Sesi: " . $bilSesi . ".\nReport: " . $laporan,
    'chat_id' => "$chatId"
];

$a = file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?" . http_build_query($data));

header("Location: ./update_attendance.php");
die;
