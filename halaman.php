<?php
  session_start();
  if (!isset($_SESSION['login'])){
    header("Location: login_form.php");
  }else {
    $pesan = $_SESSION['username'];    
  }
?>
<!DOCTYPE html>
<html>
<title>Perpustakaan online</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#home" class="w3-bar-item w3-button">Home</a>
  <a href="#about" class="w3-bar-item w3-button">About</a>
  <a href="books.php" class="w3-bar-item w3-button">Books</a>
  <a href="logout.php" class="w3-bar-item w3-button">Logout</a>
  <a href="#contact" class="w3-bar-item w3-button">Contact</a>
</nav>


<script>
  alert('Selamat datang <?php  echo $pesan ? $pesan : ''; ?>');
</script>


<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="#about" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About</a>
  <a href="books.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Books</a>
  <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Logout</a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>  
 </div>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="books.php" class="w3-bar-item w3-button">Books</a>
    <a href="#login" class="w3-bar-item w3-button">Logout</a>
    <a href="#About" class="w3-bar-item w3-button">About</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
  </div>
</div>

<!-- Image Header -->
<style>
  body, html {
    height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
  }
  
  * {
    box-sizing: border-box;
  }
  
  .bg-image {
    /* The image used */
    background-image: url("https://i.postimg.cc/BQP8KF0s/rak-buku.jpg");
    
    /* Add the blur effect */
    filter: blur(4px);
    -webkit-filter: blur(4px);
    
    /* Full height */
    height: 100%; 
    
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  
  /* Position text in the middle of the page/image */
  .bg-text {
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0, 0, 0, 0); /* Black w/opacity/see-through */
    color: white;
    font-weight: bold;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    width: 80%;
    padding: 10px;
    text-align: center;
  }
  </style>
  </head>
  <body>
  
  <div class="bg-image"></div>
  
  <div class="bg-text">
    <h2>Selamat Datang Di</h2>
    <img src="https://i.postimg.cc/MTrTc63v/bsi-logo.jpg" alt="bsi">
    <h1 style="font-size:50px">Perpustakaan Online Universitas BSI</h1>
    <p>Enjoy Your Reading</p>
  </div>

  <!-- Container -->
<div class="w3-container" style="position:relative">
  <a style="position:absolute;top:-28px;right:24px"></a>
</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Salam Literasi!</h3>
      <p>Jika ada saran atau keluhan silahkan hubungi dibawah ini</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Jakarta, ID</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +62 875 9954 6734</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  pecandubuku@gmail.com</p>
    </div>
  </div>
</div>

<!--About-->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="about">
  <div class="w3-quarter">
  <h2>About</h2>
  <p>Perpustakaan Universitas Bina Sarana Informatika merupakan layanan yang diberikan kepada mahasiswa khususnya untuk memperoleh informasi melalui buku-buku yang terdapat di perpustakaan ini. </p>
  </div>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow Us</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <p>Made by Kelompok 4</p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

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