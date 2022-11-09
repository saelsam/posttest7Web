<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM pemesanan WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $ktp = $_POST['ktp'];
        $telpon = $_POST['telpon'];
        $alamat = $_POST['alamat'];
        $foto = $_POST['foto'];
        $tujuan = $_POST['tujuan'];
        $waktu = $_POST['waktu'];

        $update = mysqli_query($db, "UPDATE pemesanan SET nama='$nama', ktp='$ktp', telpon='$telpon', alamat='$alamat', foto='$foto',  tujuan='$tujuan' waktu ='$waktu', WHERE id='$id'");

        if($update){
            header("Location:pemesanan.php");
        }
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
                <button onclick="darkmode()" class="headK" class = "modes">
                  Mode
                </button>
                <a href="pemesanan.php" class="headK">Pemesanan</a>
              </div>
        </div>
    </header>
    <br><br><br><br><br>

    <header>
        <h2>Pemesanan Tiket Wisata</h2>
    </header>
    
    <div>
        <h3>Tambah Data Tiket</h3>
        <form action="tambah.php" method="post">

            <label for="">Nama Lengkap</label><br>
            <input type="text" name="nama" value=<?=$row['nama'];?>><br>
            
            <label for="">KTP</label><br>
            <input type="text" name="ktp" value=<?=$row['ktp'];?>><br>
            
            <label for="">Telpon</label><br>
            <input type="text" name="telpon" value=<?=$row['telpon'];?>><br>
            
            <label for="">Alamat</label><br>
            <input type="text" name="alamat" value=<?=$row['alamat'];?>></input><br>

            <label for="">Foto KTP</label><br>
            <input type="file" name="foto" value=<?=$row['foto'];?>></input><br>

            <label for="">Tujuan</label><br>
            <input type="text" name="tujuan" value=<?=$row['tujuan'];?>><br>

            <label for="">Waktu</label><br>
            <input type="date" name="waktu" value=<?=$row['waktu'];?>></input><br>
            
            <input type="submit" name="submit" value="Kirim">
        
        </form>
    </div>

</body>
</html>