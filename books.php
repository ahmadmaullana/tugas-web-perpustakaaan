<?php
  session_start();
  if (!isset($_SESSION['login'])){
    header("Location: login_form.php");
    exit;
  }else {
    $pesan = $_SESSION['username'];    
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="w3-container w3-padding-64 w3-center" id="books">
<h2>BOOKS</h2>
<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="https://i.postimg.cc/9FCS4dTw/Laskar-pelangi-sampul.jpg" alt="Boss" style="width:45%" class="w3-square w3-hover-opacity">
  <h3>Laskar Pelangi</h3>
  <p>By Andrea Hirata</p>
</div>
<div class="w3-quarter">
  <img src="https://i.postimg.cc/Jnt7Ww7m/ayat-ayat-cinta.jpg" alt="Boss" style="width:45%" class="w3-square w3-hover-opacity">
  <h3>Ayat-Ayat Cinta</h3>
  <p>By Habiburrahman El Shirazy</p>
</div>
<div class="w3-quarter">
  <img src="https://i.postimg.cc/gcVcFKmx/kata.jpg" alt="Boss" style="width:45%" class="w3-square w3-hover-opacity">
  <h3>Kata</h3>
  <p>By Rintik Sedu</p>
</div>
<div class="w3-quarter">
  <img src="https://i.postimg.cc/qqj9Bq15/senja-pagi.png" alt="Boss" style="width:45%" class="w3-square w3-hover-opacity">
  <h3>Senja dan Pagi</h3>
  <p>By Alffy Rev dan Linka Angelia</p>
</div>
<div class="w3-quarter">
  <img src="https://i.postimg.cc/4yQX6XB6/bumi-manusia.jpg" alt="Boss" style="width:45%" class="w3-square w3-hover-opacity">
  <h3>Bumi Manusia</h3>
  <p>By Pramoedya Ananta Toer</p>
</div>
<div class="w3-quarter">
  <img src="https://i.postimg.cc/k5HGGMpD/danur.jpg" alt="Boss" style="width:45%" class="w3-square w3-hover-opacity">
  <h3>Gerbang Dialog Danur</h3>
  <p>By Risa Saraswati</p>
</div>
<div class="w3-quarter">
  <img src="https://i.postimg.cc/rFqV8twQ/revolusi-industri.jpg" alt="Boss" style="width:45%" class="w3-square w3-hover-opacity">
  <h3>Revolusi Industri 4.0</h3>
  <p>By Astrid Savitri</p>
</div>
<div class="w3-quarter">
  <img src="https://i.postimg.cc/Hj1T5Vws/insecure.jpg" alt="Boss" style="width:45%" class="w3-square w3-hover-opacity">
  <h3>Insecure</h3>
  <p>By Seplia</p>
</div>
<div class="w3-quarter">
  <img src="https://i.postimg.cc/vHvm9tNJ/kamus.jpg" alt="Boss" style="width:45%" class="w3-square w3-hover-opacity">
  <h3>Kamus Lengkap</h3>
  <p>By Sustrisno S.Pd dan Achmad Fanani M.Pd</p>
</div>
<div class="w3-quarter">
  <img src="https://i.postimg.cc/9MSmmxz9/linux.jpg" alt="Boss" style="width:45%" class="w3-square w3-hover-opacity">
  <h3>Mudah Belajar Linux</h3>
  <p>By Iwan Sofanas</p>
</div>
<div class="w3-quarter">
  <img src="https://i.postimg.cc/7h2xfgTW/strategi.jpg" alt="Boss" style="width:45%" class="w3-square w3-hover-opacity">
  <h3>Strategi Lolos Psikotes dan Tes Potensi Akademik</h3>
  <p>Tim Psikolog Hariwijaya Group</p>
</div>
</div>
</div>
<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
</body>
</html>