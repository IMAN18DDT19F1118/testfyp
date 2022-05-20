<?php
session_start();
$username=$_SESSION['user_name'];
$con = mysqli_connect('localhost', 'root', '', 'bookingcalendar');
$id = $_GET['dataSelect'];
$query = "SELECT * FROM temujanji WHERE id=$id";
$result = mysqli_query($con, $query);

if ($rows = mysqli_fetch_assoc($result)) {
    $id = $rows['id'];
    $nama = $rows['nama'];
    $alamat = $rows['alamat'];
    $tarikh = $rows['tarikh'];
    $masa = $rows['masa'];
}

$query2 = "SELECT * FROM rujukan WHERE id=$id";
$result2 = mysqli_query($con, $query2);

if ($rows2 = mysqli_fetch_assoc($result2)) {
    $id2 = $rows2['id'];
    $noKP = $rows2['noKP'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counselling Unit PTSS Reservation</title>
    <link href="all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="dashboard.css" rel="stylesheet">
</head>
<style>
    body {
        background: skyblue;
    }

    h1,
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

    p{
        text-align: left;
    }

    th {
        background: skyblue;
    }

    tr {
        height: 30px;
    }

    th {
        background: lightgreen;
    }

    table {
        width: 100%;
        line-height: 40px;
    }

    textarea {
        resize: none;
        width: 700px;
        height: 200px;
    }

</style>

<body>
    <h1 align="center">Laporan kemajuan</h1>
    <div  class="container col-5">
        <?php echo "<form action='laporan_kemajuan2.php?dataSelect=$id&username=$username' method='POST'>" ?>
            <table>
                <tr>
                    <th>Nama</th>
                    <td colspan='3'><?php echo "$nama" ?></td>
                </tr>
                <tr>
                    <th>No K/P</th>
                    <td colspan='3'><?php echo "$noKP" ?></td>
                </tr>
                <tr>
                    <th>Tarikh</th>
                    <td colspan='3'><?php echo "$tarikh" ?></td>
                </tr>
                <tr>
                    <th>Masa</th>
                    <td><?php echo "$masa" ?></td>
                    <td>Bilangan sesi</td>
                    <td><input required type="number" class="form-control" name="bilSesi" value="1"></td>
                </tr>
            </table>
            <br>
            <div align="center" class="form-group">
            <p>Laporan:</p>
            <textarea style="resize: none;" class="form-control" name="laporan" rows="4"></textarea>
            <br><br>
            <button style="float: left;" id="btn" name="submit" type="submit" class="btn btn-primary">Hantar</button>
        </div>
    </div>
   
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</body>

</html>
