<?php
include_once("koneksi.php");
$result = mysqli_query($mysqli,"SELECT * FROM tbl_pemesan ORDER BY ID ASC");?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Data</title>
  <meta charset="utf-8">

  <style>
* {box-sizing: border-box}

/* Add padding to containers */
.container {
  width: 800px;
    background: #ffffff;
    padding: 10px 20px 5px 8px;
    border-radius: 7px;
    box-shadow: 7px 10px 7px 5px #ddd;

}
.button{
    width: 16%;
    height: 10px;
  }
body{
    background: rgba(0,0,0, 0.1); 
    font-family: sans-serif;
    }

.center{
    margin: auto;
    width: 900px;
    padding: 50px;
}
  .right{
    float: right;

    
  }
  .left{
    float: left;
    display: block;
    
  }
.judul{
  background: rgba(0,0,0, 0.2);
    padding: 10px 15px 5px 8px;
    border-radius: 1px;
    height: 150px;
}
h1 {
	color: #ffffff;
}    .text-bayangan{
        color:#DCDCDC;
        font-size: 40px;
        text-align: center;
        text-shadow: 0px 0px 0 rgb(226, 226, 226), 
        1px 1px 0 rgb(218, 218, 218), 2px 2px 0 rgb(210, 210, 210), 3px 3px 0 
        rgb(201, 201, 201),4px 4px 0 rgb(193, 193, 193),5px 5px 0 rgb(185, 185, 185),
        6px 6px 0 rgb(177, 177, 177), 7px 7px 0 rgb(169, 169, 169),8px 1px rgba(0, 0, 0, 0.5),0px 
        0px 7px rgba(0, 0, 0.2);
    }
        	/* Table */
		.demo-table {
			border-collapse: collapse;
			font-size: 13px;
      width: 780px;
		}
  
		.demo-table th, 
    .demo-table tr{
      background: #f2effb;
    color: #f5f3fc;
    font-weight: normal;
		}
    .demo-table th, 
    .demo-table td {
		padding: 8px 20px;
    text-align: center;
		}
		.demo-table .title {
			caption-side: bottom;
			margin-top: 30px;
		}
		
		/* Table Header */
		.demo-table thead th {
			background-color: #e1d6f5;
			color: #FFFFFF;
			border-color: #bcbcbc !important;
			text-transform: uppercase;
      padding: 8px 20px;
		}
		
		/* Table Body */
		.demo-table tbody td {
			color: #353535;
		}
		.demo-table tbody td:first-child,
		.demo-table tbody td:last-child,
		.demo-table tbody td:nth-child(4) {
			text-align: right;
		}
		.demo-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.demo-table tbody tr:hover td {
			background-color: #e7e2f8;
			border-color: #e7e2f8;
			transition: all .2s;
		}
		
		/* Table Footer */
		.demo-table tfoot th {
			background-color: #e5f5ff;
		}
		.demo-table tfoot th:first-child {
			text-align: left;
		}
		.demo-table tbody td:empty
		{
			background-color: #ffcccc;
		}
</style>
  
</head>
<body>


</div></div>
  <br>
  <br>
  <div class="center">
<div class="container">
<b><h2>DATA DIRI PEMBELI</h2></b><hr/>
<?php
 echo "<font color = '#000000' font-family:'Verdana'><h9 class='right'>Toko Mycam<br>Jl. Kartika No.123-Surabaya<br>021-874324</h9></font>";?>
 <div class="left">
 <div class="row">
<div class="col">
<a href="pemesanan.html">
</a>
</div>

</form>
</div>
</div><br>
 
 <br> 
 
 <table class="demo-table" >
  <thead>
        <tr>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">No_HP</th>
        <th scope="col">Unit_Kamera</th>

        </tr>
        </thead></div>

        <tbody></br></br>
        <?php
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
            $result = mysqli_query($mysqli,"SELECT * FROM tbl_pemesan
            WHERE NAMA like '%".$cari."%'");


            
        }else {
            $result = mysqli_query($mysqli,"SELECT * FROM tbl_pemesan ORDER BY ID ASC");
        }

        while($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$res['Nama']."</td>";
            echo "<td>".$res['Alamat']."</td>";
            echo "<td>".$res['No_HP']."</td>";
            echo "<td>".$res['Unit_Kamera']."</td>";
            echo "</tr>";  
    }
        ?>
        </tbody>
    </table>

    </div>
        <script>
            window.print();
        </script>

</body>
</html>