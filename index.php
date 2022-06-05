<!DOCTYPE html>
<html>

<body>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #ddd;
}

* {
  box-sizing: border-box;
}

/* Create a column layout with Flexbox */
.row {
  display: flex;
}
.judul{
  background: #7f7f7f;
    padding: 10px 15px 5px 8px;
    border-radius: 1px;
    height: 130px;
}
/* Left column (menu) */
.left {
  flex: 135%;
  padding: 15px 0;
  height: 1900px;
}

.left h2 {
  padding-left: 20px;
}

/* Right column (page content) */
.right {
  flex: 65%;
  padding: 15px;
}

/* Style the search box */
#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border: 1px solid #ddd;
}

/* Style the navigation menu inside the left column */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
  
}

#myMenu li a {
  padding: 12px;
  text-decoration: none;
  color: black;
  display: block;
  
}

#myMenu li a:hover {
  background-color: #eee;

}
* {
  box-sizing: border-box;
}

.header {
  text-align: center;
  padding: 32px;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

.column img {
  margin-top: 12px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
}
</style>
</head>
<body>

</head>


	<header><div class="judul">
	<center><marquee width="800"><font size="14" face="Times New Roman">SELAMAT DATANG</font></marquee><br></center>
	<center> <marquee scrolldelay="400" width="800">Selamat Mengabadikan Setiap Moment Anda</marquee></center>

	</header></div>
	<div class="row">
  <div class="left" style="background-color:#bbb;">
    <h2>Menu</h2>
    <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
		<ul id="myMenu">
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="daftarbarang.php?page=daftarbarang">DAFTAR HARGA</a></li>
			<li><a href="pemesanan.html?page=pemesanan">PEMESANAN</a></li>
			<li><a href="regris.html?page=regris">SIGN-UP</a></li>
			<li><a href="Login.php?page=Login">LOGIN</a></li>
			<li><a href="data.php?page=data">DATA</a></li>
		</ul>
		</div>
	<div class="badan">
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'daftarbarang':
				include "halaman/daftarbarang.php";
				break;
			case 'pemesanan':
				include "halaman/pemesanan.html";
				break;		
			case 'regris':
				include "halaman/regris.html";
				break;
			case 'Login':
				include "halaman/Login.php";
				break;
			case 'data':
				include "halaman/data.php";
				break;					
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include 'halaman/home.php';
	}
	 ?>
	 
</div>
</div>
</div>
</div>
</div>
	</div>
</div>
</body>
</html>