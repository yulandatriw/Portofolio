<!DOCTYPE html>
<html>
    <head>
    <title>WWW.MYCAM.COM</title>
</head>
<body>
<hr>
<br>
<div class="right"><a href="submit02.php" style="text-decoration:none;" type="Submit" name="Submit" class="tombol">Peminjaman</a></div>
<h1 align=center> DAFTAR HARGA BARANG RENTAL KAMERA </h1>

<hr>
<style>
.center{
    margin: auto;
    width: 73%;
    padding: 50px;
}
    body{
        background: #f0f0f0;
        font-family: sans-serif;
    }
    .kotak{
        width: 500px;
        background: #ADD8E6;
        padding: 15px 200px 20px 180px;
        border-radius: 10px;
        box-shadow: 2px 10px 10px 2px #A9A9A9;
    }   
    .container{
        border-radius: 7px;
        padding: 10px;
        width: 865px;
        height:350px;
        background: -webkit-linear-gradient(bottom, #ebebeb, #c4c4c4);
        background-repeat:no-repeat;
        box-shadow: 2px 10px 10px 2px #A9A9A9;
    
    }
    .nil{
        width: 250px;
        margin: 10px;
        border: none;
        font-size: 14pt;
        border-radius: 5px;
        padding: 8px; 
    } 
    .left{
    float: left;
    display: block;
    
  }
  .right{
    float: right;
    display: block;
    
  }
    .nambar{
        font-size: 14pt;
        border: none;
        width: 280px;
        margin: 10px;
        border-radius: 5px;
        padding: 10px;
    }
    .tombol{
        background: #A9A9A9;
        margin: 10px;
        border-top: none;
        border-right: none;
        border-left: none;
        border-radius: 5px;
        padding: 10px 20px;
        color: #eee;
        font-size: 15pt;
        border-bottom:2px solid #64950;
    }
    .hasil{
        width: 280px;
        margin: 10px;
        border: none;
        font-size: 14pt;
        border-radius: 5px;
        padding: 10px; 
        background: #eee;
    } 
    .judul{
    text-align: center;
    color: #eee;
    font-weight: 300px;
    }
   
</style>

<?php
$Unit_Kamera = array("Canon 1100D", "Canon 1200D", "Canon 600D", "Canon 700D", "Canon 60D" );
$Harga = array("Rp.60.000", "Rp.80.000", "Rp.100.000", "Rp.120.000", "Rp.150.000");

$totalArray = count($Unit_Kamera);

echo "<table border='2', height='200px', width='900px' align='center'>";
echo "<tr bgcolor= '#A9A9A9'";
echo "<tr align=center>";
echo "<th align=center>Unit_Kamera</th>";
echo "<th align=center>Harga</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

for ($i=0; $i < $totalArray; $i++){
    echo "<tr>";
    echo "<tr bgcolor= '#E6E6FA'</tr>";
    echo "<td>$Unit_Kamera[$i]</td>";
    echo "<td>$Harga[$i]</td>";
    echo "</tr>";
    echo "</tbody>";  
}
echo "</table>";

?>    
<div class="center">
<form method="post" action="pengembalian.php">
    <div class="container">
        <h4 class="judul">INPUTKAN DISINI</h4>
        <label>Unit Kamera : </label>
        <select name="Unit_Kamera" class="nil">
                <option value="Canon 1100D">Canon 1100D</option>
                <option value="Canon 1200D">Canon 1200D</option>
                <option value="Canon 600D">Canon 600D</option>
                <option value="Canon 700D">Canon 700D</option>
                <option value="Canon 60D">Canon 60D</option>
            </select>
            <label for="date1">Tanggal Peminjaman : </label>
            <input type="date" name="Tanggal_Peminjaman" id="date1" class="nil" required>

            <label for="date2">Kembali max : </label>
            <input type="date" name="Kembali_max" id="date2" class="nil" required>

            <label for="date3">Tanggal Kembali : </label>
            <input type="date" name="Tanggal_Kembali" id="date3" class="nil" required>
            
            <label>Jumlah Hari :</label>
            <input name="Jumlah_Hari" class="nil" placeholder="Jumlah Hari" required/>
            
            <label> Harga UnitKamera :</label>
            <input name="Harga_UnitKamera" class="nil" placeholder="Harga" required/>

            <br>
            <center><br>
            <br>
            <button type="Submit" name="Submit" class="tombol">Pengembalian</button>
            <a href="./" style="text-decoration:none;" type="button" value="Batal" class="tombol">Batal</a></center>
        </form></br>
        </br>
    </div>
    
    </div>
</div>

</body>
</html>