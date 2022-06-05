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
    

<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; background: #f0f0f0; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

* {
  box-sizing: border-box;
}

body {
  font-family: Arial;
  font-size: 17px;
}

.container {
  position: relative;
  max-width: 700px;
  margin: 0 auto;
}
.right{
    float: right;
    display: block;
  }

.container img {vertical-align: middle;}

.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 96%;
  padding:20px;
}
.tombol{
        background: #bfbfbf;
        margin: 20px;
        border-top: none;
        border-right: none;
        border-left: none;
        border-radius: 5px;
        padding: 10px 20px;
        color: #555555;
        font-size: 15pt;
}
 
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

 
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.judul{
  background: rgba(0,0,0, 0.1);
    padding: 10px 15px 5px 8px;
    border-radius: 1px;
    height: 130px;
}
</style>
</head>
<body>
<div class="judul">
<div class='right'><a href='index.php' class='btn btn-outline-secondary'>Kembali</a></div>
<center><h1><font color='white'>Daftar Harga Kamera</font></h1></center>
</div>
<br>
<div class="container">
  <img src="90dkis-canon-eos-90d-single-lens-kit.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
    <h1>CANON EOS 90D</h1>
    <p>RP. 18.930.000</p>
    <a href="pemesanan.html" style="text-decoration:none;" class="tombol">Pesan</a>
  </div>
</div></br><br>
<div class="container">
  <img src="DSCF1184.acr.jpeg" alt="Notebook" style="width:100%;">
  <div class="content">
    <h1>CANON 80D</h1>
    <p>RP. 7.985.000</p>
    <a href="pemesanan.html" style="text-decoration:none;" class="tombol">Pesan</a>
  </div>
</div></br><br>
<div class="container">
  <img src="Gambar-Canon-EOS-7D.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
    <h1>CANON EOS 7D MARK 11 DSLR</h1>
    <p>RP. 21.900.000</p>
    <a href="pemesanan.html" style="text-decoration:none;" class="tombol">Pesan</a>
  </div>
</div></br><br>
<div class="container">
  <img src="7d7a64f5df1b59dc7f7df9e0c2a701ac.jpeg.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
    <h1>CANON 60D</h1>
    <p>RP. 4.300.000</p>
    <a href="pemesanan.html" style="text-decoration:none;" class="tombol">Pesan</a>
  </div>
</div></br><br>
<div class="container">
  <img src="Gambar-Kamera-Canon-EOS-600D.jpg" alt="Notebook" style="width:100%;">
  <div class="content">
    <h1>CANON EOS 600D</h1>
    <p>RP. 3.800.000</p>
    <a href="pemesanan.html" style="text-decoration:none;" class="tombol">Pesan</a>
  </div>
</div></br><br>

</body>
</html> 
