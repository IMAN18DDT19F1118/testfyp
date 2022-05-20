<?php
$con = mysqli_connect('localhost','root','','bookingcalendar');
 if(isset($_GET['dataUp2'])){
  $noKad = $_GET['dataUp2'];
  $query="SELECT * FROM rujukan WHERE noKP=$noKad";
  $result=mysqli_query($con,$query);

  if($rows=mysqli_fetch_assoc($result)){
    $nama=$rows['nama'];
    $noPendaftaran=$rows['noPendaftaran'];
    $noKP=$rows['noKP'];
    $sesi=$rows['sesi'];
    $noTel=$rows['noTel'];
    $penampilan=$rows['penampilan'];
    $sikap=$rows['sikap'];
    $akademik=$rows['akademik'];
    $keluarga=$rows['keluarga'];
    $kewangan=$rows['kewangan'];

  }
}
if(isset($_POST['submit'])){
  $con = mysqli_connect('localhost','root','','bookingcalendar');
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



$query = "UPDATE rujukan SET nama='$nama', noPendaftaran='$noPendaftaran', noKP='$noKP', sesi='$sesi',
noTel='$noTel', penampilan='$penampilan', sikap='$sikap', akademik='$akademik', keluarga='$keluarga', kewangan='$kewangan'
  WHERE noKP='$noKad' ";

if($result = mysqli_query($con,$query)){
    ?>
    <script>
        alert('Data telah dikemaskini')
		window.location='view_booking.php'
    </script>
    <?php
    }else{
      ?><script>
      alert('Data ralat')
      </script><?php
    }
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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link href="dashboard.css" rel="stylesheet">

        <style>
            body{
            background-image: linear-gradient(to left, #fbc2eb 0%, #a6c1ee 100%);
            font-family: Arial, Helvetica, sans-serif;
            }
            h1,th,td{
                color: black;
            }
            table{
            width: 100%;
            }
            th{
            width: 180px;
            }
            .form-group{
            color: black;
            }

            #btn{
            background-image: linear-gradient(to right, #1FA2FF 0%, #12D8FA  51%, #1FA2FF  100%);
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
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }
        </style>
  </head>

  <body>
    <div class="container">
        <h1>KEMASKINI BORANG RUJUKAN</h1>
        <hr>
        <div class="row">
           <div class="col-md-8">
               <form action="" method="post">
                    <table>
                        <tr>
                          <th>Nama</th>
                          <td><input required type="text" class="form-control" name="nama" value="<?php echo "$nama"?>"></td>  
                        </tr>
                        <tr>
                          <th>No Pendaftaran</th>
                          <td><input required type="text" class="form-control" name="noPendaftaran"  minlength="12" maxlength="12" value="<?php echo "$noPendaftaran"?>"></td>  
                        </tr>
                        <tr>
                          <th>No Kad Pengenalan</th>
                          <td><input required type="text" class="form-control" name="noKP" value="<?php echo "$noKP"?>"></td>  
                        </tr>
                        <tr>
                          <th>Sesi Kemasukan</th>
                          <td>
                          <select name="sesi" id="sesi" class="form-control" >
                          <option value="<?php echo "$sesi"?>"><?php echo "$sesi"?></option>
                          <option value="Sesi 1: 2021/2022">Sesi 1: 2021/2022</option>
                          <option value="Sesi 2: 2021/2022">Sesi 2: 2021/2022</option>
                          </select></td>  
                        </tr>
                        <tr>
                          <th>No Telefon</th>
                          <td><input required type="text" class="form-control" name="noTel"  maxlength="12" value="<?php echo "$noTel"?>"></td>  
                        </tr>
                    </table>
                    <br><br><br>
                   <div class="form-group">
                       <label for="">Laporan Penasihat Akademik / Pensyarah</label>
                   </div>

                   <div class="form-group">
                       <label for="">1. Penampilan</label>
                       <textarea  style="resize: none;" class="form-control" name="penampilan" cols="30" rows="3" ><?php echo $penampilan ?></textarea>
                   </div>

                   <div class="form-group">
                       <label for="">2. Sikap / Keperibadian</label>
                       <textarea  style="resize: none;" class="form-control" name="sikap" cols="30" rows="3" ><?php echo $sikap ?></textarea>
                   </div>

                   <div class="form-group">
                       <label for="">3. Akademik</label>
                       <textarea  style="resize: none;" class="form-control" name="akademik" cols="30" rows="3" ><?php echo $akademik ?></textarea>
                   </div>

                   <div class="form-group">
                       <label for="">4. Keluarga</label>
                       <textarea  style="resize: none;" class="form-control" name="keluarga" cols="30" rows="3" ><?php echo $keluarga ?></textarea>
                   </div>

                   <div class="form-group">
                       <label for="">5. Kewangan</label>
                       <textarea  style="resize: none;" class="form-control" name="kewangan" cols="30" rows="3" ><?php echo $kewangan?></textarea>
                   </div>
                                      
                   <div class="form-group">
                       <button id="btn" name="submit" type="submit" class="btn btn-primary">Update</button>
                   </div>
               </form>
           </div>
            
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>

</html>
