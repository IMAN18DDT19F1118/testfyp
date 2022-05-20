<?php 
    $con = mysqli_connect('localhost','root','','bookingcalendar');
    if(isset($_GET['data'])){
     $id = $_GET['data'];
     $query="SELECT * FROM rujukan WHERE id=$id";
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
        $namaPA=$rows['namaPA'];
      }
    }

    require("fpdf/fpdf.php");

    class PDF extends FPDF
    {
    // Page header
    function Header()
    {
        $this->SetFont('Arial','B',8);
        // Move to the right
        $this->Cell(170);
    
        $this->Cell(60,10,'SULIT',0,1);
        // Arial bold 15
        // Line break
        $this->Ln(15);
    }
    
    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        $this->Cell(0,0,"Unit Psikologi Politeknik Tuanku Syed Sirajuddin",0,1,'C');
        // Page number
        //$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    }
    
    $image="../logo_ptss.png";
    
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    //$pdf->Image($image, 75, 20,70,28);
    $pdf->SetFont('Arial','B',10);
    //$pdf->Ln(13);
    $pdf->Cell(0,10,'POLITEKNIK TUANKU SYED SIRAJUDDIN',0,1,'C');
    $pdf->Cell(0,10,'UNIT KAUNSELING DAN KERJAYA',0,1,'C');
    $pdf->Ln(7);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(0,10,"BORANG RUJUKAN PELAJAR",0,1,'C');
    
    $pdf->SetFont('Arial','I',8);
    $pdf->Cell(0,5,"(BORANG INI PERLU DIISI BERSAMA BORANG TEMUJANJI DAN DIHANTAR KE UNIT KAUNSELING)",0,1,'C');
    
    $pdf->Ln(10);
    $pdf->SetFont('Arial','I',10);
    $pdf->Cell(28);
    $pdf->Cell(50,10,"PENASIHAT AKADEMIK",0,0);
    $pdf->Cell(0,10,":$namaPA",0,1);
    
    $pdf->Cell(28);
    $pdf->Cell(50,10,"NAMA PELAJAR",0,0);
    $pdf->Cell(0,10,":$nama",0,1);
    
    $pdf->Cell(28);
    $pdf->Cell(50,10,"NO. PENDAFTARAN",0,0);
    $pdf->Cell(0,10,":$noPendaftaran",0,1);
    
    $pdf->Cell(28);
    $pdf->Cell(50,10,"NO. K/P",0,0);
    $pdf->Cell(0,10,":$noKP",0,1);
    
    $pdf->Cell(28);
    $pdf->Cell(50,10,"SESI KEMASUKAN",0,0);
    $pdf->Cell(0,10,":$sesi",0,1);
    
    $pdf->Cell(28);
    $pdf->Cell(50,10,"NO TELEFON",0,0);
    $pdf->Cell(0,10,":$noTel",0,1);
    
    $pdf->Ln(10);
    $pdf->Cell(28);
    $pdf->Cell(0,10,"Laporan Penasihat Akademik / Pensyarah",0,1);
    
    $pdf->Cell(32);
    $pdf->Cell(50,10,"1. Penampilan",0,1);
    
    $pdf->Cell(38);
    $pdf->Cell(0,3,$penampilan,0,1);
    $pdf->Ln(6);
    
    $pdf->Cell(32);
    $pdf->Cell(50,10,"2 .Sikap/Keperibadian",0,1);
    
    $pdf->Cell(38);
    $pdf->Cell(0,3,$sikap,0,1);
    $pdf->Ln(6);
    
    $pdf->Cell(32);
    $pdf->Cell(50,10,"3. Akademik",0,1);
    
    $pdf->Cell(38);
    $pdf->Cell(0,3,$akademik,0,1);
    $pdf->Ln(6);
    
    $pdf->Cell(32);
    $pdf->Cell(50,10,"4. Keluarga/ Kewangan",0,1);
    
    $pdf->Cell(38);
    $pdf->Cell(0,3,$akademik,0,1);
    $file = 'rujukan_'.$noPendaftaran.'.pdf';
    $pdf->output($file,'D');
