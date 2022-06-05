<?php
include("koneksi.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WWW.MYCAM.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
.left{
    float: left;
    display: block;
  }
  .right{
    float: right;
    display: block;
  }
</style>
</head>
<body>
<div class="bg-img">
<div class="center">
<?php
    if(isset($_POST['Submit'])) {
    $Email = mysqli_real_escape_string($mysqli, $_POST['Email']);
    $Nama = mysqli_real_escape_string($mysqli, $_POST['Nama']);
    $Tanggal_Lahir = mysqli_real_escape_string($mysqli, $_POST['Tanggal_Lahir']);
    $Alamat = mysqli_real_escape_string($mysqli, $_POST['Alamat']);
    $Password1 = mysqli_real_escape_string($mysqli, $_POST['Password1']);
    $Konfirmasi_Password = mysqli_real_escape_string($mysqli, $_POST['Konfirmasi_Password']);

    // checking empty fields
    if(empty($Email) || empty($Nama) || empty($Tanggal_Lahir) || empty($Alamat) || empty($Password1) || empty($Konfirmasi_Password)) {
    if(empty($Email)) {
    echo "<font Size='9' color='red'>Maaf, Email Anda masih belum diisi !!!</font><br/>";
    }
    if(empty($Nama)) {
    echo "<font Size='9' color='red'>Maaf, Nama Anda masih belum diisi !!!</font><br/>";
    }
    if(empty($Tanggal_Lahir)) {
    echo "<font Size='9' color='red'>Maaf, Tanggal Lahir Anda masih belum diisi !!!</font><br/>";
    }
    if(empty($Alamat)) {
    echo "<font Size='7' color='red'>Maaf, Alamat Anda masih belum diisi !!!</font><br/>";
    }
    if(empty($Password1)) {
        echo "<font Size='7' color='white'>Maaf, Password Anda masih belum diisi !!!</font><br/>";
        }
        if(empty($Konfirmasi_Password)) {
            echo "<font Size='7' color='#c05f2c'>Maaf, Konfirmasi Password Anda masih belum diisi !!!</font><br/>";
            }
    //link to the previous page
    echo "<br/><a href='javascript:self.history.back();' class='btn btn-outline-warning'>Kembali</a>";
    } else {
    // if all the fields are filled (not empty)
    //insert data to database
    $result = mysqli_query($mysqli, "INSERT INTO tbl_register(Email, Nama, Tanggal_Lahir, Alamat, Password1, Konfirmasi_Password) VALUES('$Email','$Nama','$Tanggal_Lahir','$Alamat','$Password1','$Konfirmasi_Password')");
    //display success message
    echo "<font color='#f6e8d6' Size='4'><b>SELAMAT, DATA BERHASIL DISIMPAN !!!</b><hr>Memfoto adalah kegiatan mengambil gambar diam baik berwarna maupun hitam-putih 
    yang dihasilkan oleh kamera yang merekam suatu objek atau kejadian atau keadaan pada suatu waktu tertentu. Foto dibagi menjadi beberapa definisi potret film fotograf 
    cetakan lukisan dan berfoto dibagi menjadi dua bagian bergambar dan berpotret. 
    Kegiatan yang berhubungan dengan foto diistilahkan dengan fotografi. Kata foto berasal dari bahasa Yunani, 
    yaitu photos yang berarti cahaya atau sinar.";
    echo "<br><a href='Login.php' class='btn btn-outline-dark'>Next</a></br>";
    }
    }
?>
    </div>
</div>
</body>
</html>