<?php
include("koneksi.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</head>
<body>
<style>
.center{
    margin: auto;
    width: 700px;
    padding: 70px;
    border: 1px solid #a9a9a9;
    background-position: 0 0, 100%0;
    background: -webkit-linear-gradient(bottom, #f1f1f1, #f2f2f2);
    background-repeat:no-repeat;
    
}.atur{
    margin: auto;
    width: 13%;
    padding: 0px;
	}
    body{
        background: #ddd;
        font-family: sans-serif;
    }
    .kotak{
        width: 500px;
        background: #f5f5f5;
        padding: 10px 20px 15px 18px;
        height: 350px;
        border-radius: 7px;
    }
			.lead {
				font-family: "Verdana";
				font-weight: bold;
			}
			.value {
				font-family: "Verdana";
			}
			.value-big {
				font-family: "Verdana";
				font-weight: bold;
				font-size: large;
			}
			.td {
				valign : "top";
			}

			/* @page { size: with x height */
			/*@page { size: 20cm 10cm; margin: 0px; }*/
			@page {
				size: A4;
				margin : 0px;
			}
	/*		@media print {
			  html, body {
			  	width: 210mm;
			  }
			}*/
			/*body { border: 2px solid #000000;  }*/
.left{
    float: left;
    display: block;
  } .right{
    float: right;
  }
  @media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
	</style><body>
<?php
    if(isset($_POST['Submit'])) {
    $Unit_Kamera = mysqli_real_escape_string($mysqli, $_POST['Unit_Kamera']);
    $Tanggal_Peminjaman = mysqli_real_escape_string($mysqli, $_POST['Tanggal_Peminjaman']);
	$Kembali_max = mysqli_real_escape_string($mysqli, $_POST['Kembali_max']);
	$Jumlah_Hari = mysqli_real_escape_string($mysqli, $_POST['Jumlah_Hari']);
    $Harga_UnitKamera = mysqli_real_escape_string($mysqli, $_POST['Harga_UnitKamera']);

    // checking empty fields
    if(empty($Unit_Kamera) || empty($Tanggal_Peminjaman) || empty($Kembali_max) || empty($Jumlah_Hari) || empty($Harga_UnitKamera)) {
    if(empty($Unit_Kamera)) {
    echo "<center><font Size='14' color='red'>Maaf, Unit_Kamera Anda masih belum diisi !!!</font></center><br/>";
    }
    if(empty($Tanggal_Peminjaman)) {
    echo "<center><font Size='14' color='red'>Maaf, Tanggal_Peminjaman Anda masih belum diisi !!!</font></center><br/>";
    }
    if(empty($Kembali_max)) {
    echo "<center><font Size='14' color='red'>Maaf, Kembali_max Anda masih belum diisi !!!</font></center><br/>";
    }
	if(empty($Jumlah_Hari)) {
		echo "<center><font Size='14' color='red'>Maaf, Jumlah_Hari Anda masih belum diisi !!!</font></center><br/>";
		}
		if(empty($Harga_UnitKamera)) {
			echo "<center><font Size='14' color='red'>Maaf, Harga_UnitKamera Anda masih belum diisi !!!</font></center><br/>";
			}
    //link to the previous page
    echo "<br/><center><a href='javascript:self.history.back();' class='btn btn-outline-warning'>Kembali</a></center>";
    } else {
    // if all the fields are filled (not empty)
    //insert data to database
    $result = mysqli_query($mysqli, "INSERT INTO tbl_peminjaman(Unit_Kamera, Tanggal_Peminjaman, Kembali_max, Jumlah_Hari, Harga_UnitKamera) VALUES('$Unit_Kamera','$Tanggal_Peminjaman','$Kembali_max', '$Jumlah_Hari', '$Harga_UnitKamera')");
    //display success message
	echo "<br/><div class='right'><div class='no-print'><a href='Login.php' class='btn btn-danger'>LogOut</a></div></div>";
    }
    }
?>
    <div class="center">
<div class="kotak">
<div class="values">
<?php
 echo "<font color = '#959595'><center><h2><b>BUKTI PEMINJAMAN</b></h2></center></font>";
?>
<?php
 echo "<font color = '#000000' font-family:'Verdana'><h9 class='right'>Toko Mycam<br>Jl. Kartika No.123-Surabaya<br>021-874324</h9></font>";?>
<td>____________________________________________________</td>
<?php
 $Unit_Kamera = $_POST['Unit_Kamera'];
 $date1 = date_create($_POST['Tanggal_Peminjaman']);
 $date2 = date_create($_POST['Kembali_max']);
 $Jumlah_Hari = $_POST['Jumlah_Hari'];
 $Harga_UnitKamera = $_POST['Harga_UnitKamera'];



 echo "Unit Kamera : " .$Unit_Kamera."<br>";
 echo "Tanggal Peminjaman : ".$Tanggal_Peminjaman."<br>";
 echo "Kembali max : ".$Kembali_max."<br>";
 echo "Jumlah Hari : " .$Jumlah_Hari." hari" ."<br>";
 echo "harga : "."RP.".$Harga_UnitKamera."<br>";

 ?>

<td>____________________________________________________</td>
 <?php $TotalKes=$Harga_UnitKamera * $Jumlah_Hari; 
 echo "<a href='#' class='badge badge-danger'> <h7> Total : "."Rp. " .$TotalKes. " "?></h7></a></br>

						
					</tr>
					<tr>
						<td>&nbsp;</td>
					<div class="right">	<td><div class="value"><b>Terima Kasih</b></div></td></div>
					</tr>
                   
 </td>
 </div>
 </div>
 </div>
 <br>
 <br>
 <?php echo "<br><center><div class='no-print'><a href='#' onclick='window.print()' class='btn btn-info'>Cetak</a></center></div></div>";  ?>
 </body>
 </html>

