<?php
include('includes/header.php');


$date2 = $_GET['tarikh2'];
$time2 = $_GET['masa2'];
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $noPendaftaran = $_POST['noPendaftaran'];
    $noKP = $_POST['noKP'];
    $sesi = $_POST['sesi'];
    $noTel = $_POST['noTel'];
    $penampilan = $_POST['penampilan'];
    $sikap = $_POST['sikap'];
    $akademik = $_POST['akademik'];
    $keluarga = $_POST['keluarga'];
    $kewangan = $_POST['kewangan'];

    $mysqli = new mysqli('localhost', 'root', '', 'bookingcalendar');
    $stmt = $mysqli->prepare("INSERT INTO rujukan(nama,noPendaftaran,noKP,sesi,noTel,penampilan,sikap,akademik,keluarga,kewangan) VALUES(?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param('ssssssssss', $nama, $noPendaftaran, $noKP, $sesi, $noTel, $penampilan, $sikap, $akademik, $keluarga, $kewangan);
    $stmt->execute();
    $msg = "<div class='alert alert-success'>Booking Successfull</div>";
    $stmt->close();
    $mysqli->close();
    header("Location: temujanji.php?dataUp='$noPendaftaran'&tarikh2=$date2&masa2=$time2");
    die;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>
    <link href="all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="dashboard.css" rel="stylesheet">

</head>

<style>
    body {
        background-image: linear-gradient(to left, #fbc2eb 0%, #a6c1ee 100%);
        font-family: Arial, Helvetica, sans-serif;
    }

    h1,
    h2 {
        color: black;
    }

    .form-group {
        color: black;

    }

    table {
        width: 100%;
    }

    th {
        width: 20%;
        color: black;
    }

    #btn {
        background-image: linear-gradient(to right, #1FA2FF 0%, #12D8FA 51%, #1FA2FF 100%);
        margin: 10px;
        padding: 15px 45px;
        text-align: center;
        text-transform: uppercase;
        transition: 0.5s;
        background-size: 200% auto;
        color: white;
        box-shadow: 0 0 20px #eee;
        border-radius: 10px;
        display: block;
    }

    #btn:hover {
        background-position: right center;
        /* change the direction of the change here */
        color: #fff;
        text-decoration: none;
    }
</style>

<body>
    
    <div class="container">
        <h2>BORANG RUJUKAN PELAJAR</h2>
        <hr>
        <div class="row2">
            <div class="col-md-8">
                <?php echo (isset($msg)) ? $msg : ""; ?>
                <form method="post">
                    <table>
                        <tr>
                            <th>Nama</th>
                            <td><input required type="text" class="form-control" name="nama"></td>
                        </tr>
                        <tr>
                            <th>No. Pendaftaran</th>
                            <td><input required type="text" class="form-control" minlength="12" maxlength="12" name="noPendaftaran"></td>
                        </tr>
                        <tr>
                            <th>No. Kad Pengenalan</th>
                            <td><input required type="text" class="form-control" minlength="12" maxlength="12" name="noKP"></td>
                        </tr>
                        <tr>
                            <th>Sesi Kemasukan</th>
                            <td>
                                <select name="sesi" id="sesi" class="form-control">
                                    <option value=""></option>
                                    <option value="Sesi 1: 2021/2022">Sesi 1: 2021/2022</option>
                                    <option value="Sesi 2: 2021/2022">Sesi 2: 2021/2022</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>No. Telefon</th>
                            <td><input required type="text" class="form-control" maxlength="13" name="noTel"></td>
                        </tr>
                    </table>


                    <br><br><br>
                    <div class="form-group">
                        <label for="">Laporan Penasihat Akademik / Pensyarah</label>
                    </div>

                    <div class="form-group">
                        <p1>1.Penampilan</p1>
                        <p1 style="font-size: 14px; color: red;">*tidak wajib diisi</p1>
                        <textarea style="resize: none;" class="form-control" name="penampilan" cols="30" rows="3"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <p1>2.Sikap / Keperibadian</p1>
                        <p1 style="font-size: 14px; color: red;">*tidak wajib diisi</p1>
                        <textarea style="resize: none;" class="form-control" name="sikap" cols="30" rows="3"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <p1>3. Akademik</p1>
                        <p1 style="font-size: 14px; color: red;">*tidak wajib diisi</p1>
                        <textarea style="resize: none;" class="form-control" name="akademik" cols="30" rows="3"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <p1>4. Keluarga</p1>
                        <p1 style="font-size: 14px; color: red;">*tidak wajib diisi</p1>
                        <textarea style="resize: none;" class="form-control" name="keluarga" cols="30" rows="3"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <p1>5. Kewangan</p1>
                        <p1 style="font-size: 14px; color: red;">*tidak wajib diisi</p1>
                        <textarea style="resize: none;" class="form-control" name="kewangan" cols="30" rows="3"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <button id="btn" name="submit" type="submit" class="btn btn-primary">Hantar</button>
                    </div>
                </form>

            </div>


        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</body>

</html>
