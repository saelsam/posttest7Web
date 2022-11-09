<?php 
  

  session_start();
  include 'config.php';

  if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit Toraja</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsiveP.css">
</head>
<body>
    <header class="headerPusat">
        <div class="Heads">
            <span class="header-kiri">
                <img src="assets/logo1.png" alt="">
            </span>   
    
            <div id="header-kanan">
                <a href="http://localhost/posttest7Web/" class="headK">Home</a>
                <a href="#aboutme" class="headK">About Me</a>
                <button onclick="darkmode()" class="headK" class = "modes">
                  Mode
                </button>
                <a href="pemesanan.php" class="headK">Pemesanan</a>
                <a href="logout.php" class="headK">Logout</a>
              </div>
        </div>
    </header>
    <br><br><br><br><br>
    <center>
        <div class="content1" align="center">
            <h1 id="judul">Destinasi Wisata Tanah Toraja</h1>
        </div>
        <div class="responsive" align="center">
            <div class="gallery">
              <a target="_blank" href="https://saelsam.github.io/posttest3/"">
                <img src="assets/Lombok Parinding.jpg" alt="Lombok Parinding" width="1000" height="600">
              </a>
              <div class="desc">Lombok Parinding</div>
            </div>
        </div>

        <div class="responsive" align="center">
            <div class="gallery">
              <a target="_blank" href="https://saelsam.github.io/posttest3/">
                <img src="assets/Bori' Kalimbuang.jpg" alt="Bori' Kalimbuang" width="1000" height="600">
              </a>
              <div class="desc">Bori' Kalimbuang</div>
            </div>
        </div>

        <div class="responsive" align="center">
            <div class="gallery">
              <a target="_blank" href="https://saelsam.github.io/posttest3/">
                <img src="assets/Ke'te' Kesu'.jpg" alt="Ke'te' Kesu" width="1000" height="600">
              </a>
              <div class="desc">Ke'te' Kesu'</div>
            </div>
        </div>

        <div class="responsive" align="center">
            <div class="gallery">
              <a target="_blank" href="https://saelsam.github.io/posttest3/">
                <img src="assets/Kolam Alam Limbong.jpg" alt="Kolam Alam Limbong" width="1000" height="600">
              </a>
              <div class="desc">Kolam Alam Limbong</div>
            </div>
        </div>

        <div class="responsive" align="center" >
            <div class="gallery">
              <a target="_blank" href="https://saelsam.github.io/posttest3/">
                <img src="assets/Salib Singki'.jpg" alt="Salib Singki'" width="1000" height="600">
              </a>
              <div class="desc">Salib Singki'</div>
            </div>
        </div>

        <div class="responsive" align="center" >
            <div class="gallery">
              <a target="_blank" href="https://saelsam.github.io/posttest3/">
                <img src="assets/Palawa'.jpg" alt="Palawa'" width="1000" height="600">
              </a>
              <div class="desc">Palawa</div>
            </div>
        </div>
        <button class="button" id="btn">Tampilkan Deskripsi</button>
        <p id="det" style="display: none">
          Tana Toraja adalah salah satu kabupaten yang berada di provinsi Sulawesi Selatan, Indonesia. 
          Ibu kota dari kabupaten ini ada di kecamatan Makale. 
          Tana Toraja memiliki luas wilayah 2.054,30 km² dan pada pertengahan tahun 2022 memiliki penduduk sebanyak 270.984 jiwa dengan kepadatan 132 jiwa/km².
          Suku Toraja yang mendiami daerah pegunungan dan mempertahankan gaya hidup yang khas dan masih menunjukkan gaya hidup Austronesia yang asli dan mirip dengan budaya suku Batak Toba dan Nias yang ada di provinsi Sumatra Utara. 
          Daerah ini merupakan salah satu objek wisata unggulan di provinsi Sulawesi Selatan.
        </p>
    </center>
  
    
    
    <br><br><br>
  
        <div class="footer-down">
          <h3 id="aboutme">About Me</h3>
          <p>Nama : Sael Samuel Rude'</p>
          <p>NIM : 2009106034</p>
          <p>Prodi : Informatika</p>
          <p>Angkatan 2020</p> <br><br>
          <div style="font-size: 20px;">Website Visit Toraja</div>
          <hr/>
          <p>Copyright &copy 2022 All Rights Reserved</p>
        </div>
        
    


<script src="script.js"></script>
<script src="jquery.js"></script>

</body>
</html>