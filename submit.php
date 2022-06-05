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
<body>
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
    echo "<font color='green' Size='14'><center><b>SELAMAT, DATA BERHASIL DISIMPAN !!!</b>";
    echo "<br/><a href='data.php' class='btn btn-outline-primary'>View Result</a></center>";
    }
    }
?>
    
</body>
</html>