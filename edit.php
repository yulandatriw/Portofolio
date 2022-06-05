<?php
include("koneksi.php");?>
<?php
if (isset($_POST['Update'])) {
    $ID = mysqli_real_escape_string($mysqli, $_POST['ID']);
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
  }
  else {
        //updating the table
        $result = mysqli_query(
        $mysqli,
        "UPDATE tbl_pemesan SET Nama='$Nama',Alamat='$Alamat', No_HP='$No_HP', Unit_Kamera='$Unit_Kamera' WHERE ID=$ID");
        //redirectig to the display page. In our case, it is index.php
        header("Location: data.php");
        }
      }
        ?>
        <?php
//getting id from url
$ID = $_GET['ID'];
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM tbl_pemesan WHERE ID=$ID");
while($res = mysqli_fetch_array($result)) {
$Nama = $res['Nama'];
$Alamat = $res['Alamat'];
$No_HP = $res['No_HP'];
$Unit_Kamera = $res['Unit_Kamera'];
}
?>
<html>
<head>
<title>WWW.MYCAM.COM</title>
<style>
   .center {
    position: absolute;
    right: 350px;
    margin: 20px;
    max-width: 300px;
    padding: 70px;
    background-position: 0 0, 100%;
    background: -webkit-linear-gradient(bottom, #c4c4c4, #ebebeb);
    background-repeat:no-repeat;
}
    body{
         
         font-family: sans-serif;
     }
     h2 {
         color: #fff;
     } 
    .submit {
        padding: 1em;
        margin: 2em auto;
        width: 17em;
        background: #fff;
        border-radius: 3px;
    }
    .label {
        font-size: 10pt;
        color: #fff;
        background: #0000FF;
        float:center;
        margin:9px;
    
    }
    input[type="text"],
    input[type="date"], select, textarea
     {
        padding: 7px;
        width: 75%;
        background: #efefef;
        border: 0;
        font-size: 10pt;
        margin: 7px 40px;
    }
    .nil{
            width: 280px;
            margin: 10px;
            border: none;
            font-size: 14pt;
            border-radius: 5px;
            padding: 8px; 
        }
    .tombol{
        background: #2e84be;
        color: #fff;
        border: 5;
        padding: 5px 8px;
        margin: 10px 0px;
    }.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 10px 15px;
  border-radius: 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 80%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}.bg-img {
  /* The image used */
  background-image: url("download10.jpg");

  min-height: 800px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
    .text-bayangan{
        color:#DCDCDC;
        font-size: 40px;
        text-align: center;
        text-shadow: 0px 0px 0 rgb(226, 226, 226), 
        1px 1px 0 rgb(218, 218, 218), 2px 2px 0 rgb(210, 210, 210), 3px 3px 0 
        rgb(201, 201, 201),4px 4px 0 rgb(193, 193, 193),5px 5px 0 rgb(185, 185, 185),
        6px 6px 0 rgb(177, 177, 177), 7px 7px 0 rgb(169, 169, 169),8px 1px rgba(0, 0, 0, 0.5),0px 
        0px 7px rgba(0, 0, 0.2);
    }			
   
    </style>
    </head>
    <body>
        <div class="bg-img">
            <div class="right">
            <center><h2><div class="text-bayangan">SILAHKAN DIISI</div></h2></center>
    <div class="center">
    <form class="col-4" action="edit.php" method="POST">
    <div class="container">
    <center><h2><font face="century gothic" size="7" color="#808080">Formulir</font></h2></center>
    <font face="manaco" size="4">
            <input type="text" name="Nama" placeholder="Masukan Nama" value="<?php echo $Nama;?>"/></br>

      
            <input type="text" name="Alamat" placeholder="Masukan Alamat" value="<?php echo $Alamat;?>"/></br>

            <input type="text" name="No_HP" placeholder="Masukan No_HP" value="<?php echo $No_HP;?>"/></br>
            
        <select name="Unit_Kamera" value="<?php echo $Unit_Kamera;?>" ><br>
            <option value="-">- Pilih Unit Kamera -</option>
                    <option value="Canon EOS 90D KIT">Canon EOS 90D KIT</option>
                    <option value="Canon EOS 7D Mark 11 DSLR">Canon EOS 7D Mark 11 DSLR</option>
                    <option value="Canon 80D">Canon 80D</option>
                    <option value="Canon 60D">Canon 60D</option>
                    <option value="Canon 600D">Canon 600D</option>
                </select></br></br>
                <input type="hidden" name="ID" value=<?php echo $_GET['ID'];?>>
<center><button type="submit" name="Update" class="registerbtn">Update</button></center>
</form>
  </div>
        
</form>
    </div>
</div>
    </div>
</div>
    </body>
</html>
