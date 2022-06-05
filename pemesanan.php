<?php
include("koneksi.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</head>
<style>
     .bg-img {
  /* The image used */
  background-image: url("download11.jpg");

  min-height: 800px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.center {
    position: absolute;
    right: 700px;
    margin: 50px;
    max-width: 800px;
    padding: 30px;
    background-position: 0 0, 100%;
    background-repeat:no-repeat;
    background-attachment: fixed;
    background: rgba(142, 0, 0, 0.3);
        border: #d2d2d2 0px solid;
}
</style>
<body>
<div class="bg-img">
<div class="center">
<?php
    if(isset($_POST['Submit'])) {
    $Nama = mysqli_real_escape_string($mysqli, $_POST['Nama']);
    $Alamat = mysqli_real_escape_string($mysqli, $_POST['Alamat']);
    $No_HP = mysqli_real_escape_string($mysqli, $_POST['No_HP']);
    $Unit_Kamera = mysqli_real_escape_string($mysqli, $_POST['Unit_Kamera']);

    // checking empty fields
    if(empty($Nama) || empty($Alamat) || empty($No_HP) || empty($Unit_Kamera)) {
    if(empty($Nama)) {
    echo "<center><font Size='14' color='red'>Maaf, Nama Anda masih belum diisi !!!</font></center><br/>";
    }
    if(empty($Alamat)) {
    echo "<center><font Size='14' color='red'>Maaf, Alamat Anda masih belum diisi !!!</font></center><br/>";
    }
    if(empty($No_HP)) {
    echo "<center><font Size='14' color='red'>Maaf, No_HP Anda masih belum diisi !!!</font></center><br/>";
    }
    if(empty($Unit_Kamera)) {
    echo "<center><font Size='14' color='red'>Maaf, Unit_Kamera Anda masih belum diisi !!!</font></center><br/>";
    }
    //link to the previous page
    echo "<br/><center><a href='javascript:self.history.back();' class='btn btn-outline-warning'>Kembali</a></center>";
    } else {
    // if all the fields are filled (not empty)
    //insert data to database
    $result = mysqli_query($mysqli, "INSERT INTO tbl_pemesan(Nama, Alamat, No_HP, Unit_Kamera) VALUES('$Nama','$Alamat','$No_HP','$Unit_Kamera')");
    //display success message
    echo "<font color='#f6e8d6' Size='4'><b>SELAMAT, MENGABADIKAN MOMENT ANDA !!!</b><hr>Fotografi merupakan salah satu 
    alat komunikasi efektif yang digunakan oleh seorang fotografer kepada para penerima pesan. 
    Sedangkan seni adalah kegiatan manusia dalam merefleksikan kenyataan ke dalam sebuah karya yang 
    bentuk dan isinya memiliki daya untuk membangkitkan pengalaman tertentu didalam rohani si penerima. Selain itu, seni juga dapat dikatakan 
    sebagai salah satu cara dalam mengkomunikasikan sebuah pesan dari seniman kepada para penerima pesan dengan 
    memerhatikan aspek keindahan.";
    echo "<br><a href='data.php' class='btn btn-outline-secondary'>Lihat Data</a></br>";
    }
    }
?>
    
</body>
</html>