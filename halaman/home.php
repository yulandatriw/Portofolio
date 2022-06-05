<div class="right" style="background-color:#ddd;">
<div class="halaman">
<?php $katper="selamat datang di website ini";
$ubah=str_replace("ini", "kami", $katper);
$akhir=strtoupper($ubah);
echo "<h2>$akhir </h2>" ?>

<p font-family="serif">Mycam adalah salah satu lini usaha yang bergerak dilayanan penyewaan kamera dan juga menjual beberapa 
kamera bermerk canon dengan beberapa tipe yang berbeda. memang usaha ini baru bergerak namun usaha ini mampu memberikan layanan yang terbaik kepada konsumennya. 
kami menyediakan beberapa tipe kamera terutama merk canon, kamera yang disewakan dan yang dijual ditoko mycame
tentunya merupakan kamera yang berkualitas. harganya cukup terjangkau, dan kualitas tetap nomer satu. kepuasaan pelanggan adalah prioritas kita.jangan ragukan lagi, silahkan join dan abadikan moment anda 
bersama keluarga, pacar ataupun sahabat. karena mengabadikan moment dapat menjadi penguat saat kondisi sulit dan 
pengingat untuk terus bersyukur.</p>
</div>
<div class="header">
  <h1><font face="Courier New" color="Black" size="15">Kumpulan Foto</font></h1><hr/>
</div>

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
  <img src="download1.jpg" style="width:100%">
  <img src="download2.jpg" style="width:100%">
  <img src="download3.jpg" style="width:100%">
  <img src="download4.jpg" style="width:100%">

  </div>
  <div class="column">
  <img src="download8.jpg" style="width:100%">
  <img src="download6.jpg" style="width:100%">
  <img src="download5.jpg" style="width:100%">
  <img src="download3.jpg" style="width:100%">

  </div>  
  <div class="column">
  <img src="download1.jpg" style="width:100%">
  <img src="download2.jpg" style="width:100%">
  <img src="download3.jpg" style="width:100%">
  <img src="download4.jpg" style="width:100%">
 
  </div>
  <div class="column">
  <img src="download8.jpg" style="width:100%">
  <img src="download6.jpg" style="width:100%">
  <img src="download5.jpg" style="width:100%">
  <img src="download3.jpg" style="width:100%">

  </div>
</div>
<script>
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>