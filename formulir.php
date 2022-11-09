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
                <button onclick="darkmode()" class="headK" class = "modes">
                  Mode
                </button>
                <a href="pemesanan.php" class="headK">Pemesanan</a>
              </div>
        </div>
    </header>
    <br><br><br><br><br>
    
    <div style="text-align: center; background-color: brown; margin: 200px;">
        <h3 style="font-size: 30px;">Tambah Data Tiket</h3>
        <form action="tambah.php" method="post" >
        <p>Hari Ini : <?=date("d-m-Y")?></p><br>
            <label for="" style="font-size: 17px;">Nama Lengkap</label><br>
            <input type="text" name="nama"><br>
            
            <label for="" style="font-size: 17px;">KTP</label><br>
            <input type="text" name="ktp" ><br>
            
            <label for="" style="font-size: 17px;">Telpon</label><br>
            <input type="text" name="telpon"><br>
            
            <label for="" style="font-size: 17px;">Alamat</label><br>
            <input name="alamat"></input><br>

            <label for="" style="font-size: 17px;">Foto</label><br>
            <input type="file" name="foto"></input><br>

            <label for="" style="font-size: 17px;">Tujuan</label><br>
            <input type="text" name="tujuan"><br>

            <label for="" style="font-size: 17px;">Waktu</label><br>
            <input type="date" name="waktu"></input><br>

            <input type="hidden" name="waktusave" value=<?= date("d-m-Y")?>>
            <input type="submit" name="submit" value="Kirim" style="font-size: 17px;">
        
        </form>
    </div>

    <script src="script.js"></script>
    <script src="jquery.js"></script>
</body>
</html>

<?php 

    require 'config.php';

    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $ktp = $_POST['ktp'];
        $telpon = $_POST['telpon'];
        $alamat = $_POST['alamat'];
        $foto = $_POST['foto'];
        $tujuan = $_POST['tujuan'];
        $waktu = $_POST['waktu'];
        
        $gambar = $_FILES['foto']['name'];
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));

        $gambar_baru = "$foto.$ekstensi";
        $tmp = $_FILES['foto']['tmp_name'];

        if(move_uploaded_file($tmp, 'gambar/'.$gambar_baru)){
            $query = "INSERT INTO pemesanan (nama,ktp,telpon,alamat,foto, tujuan, waktu) VALUES ('$nama','$ktp','$telpon','$alamat','$foto','$tujuan', '$waktu' )";
            $result = $db->query($query);

            if($result){
                header("Location:index.php");
            }else{
                echo "gagal kirim";
            }
        }
        
    }
?>