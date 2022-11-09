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

    $kirim = mysqli_query($db, "INSERT INTO pemesanan (nama,ktp,telpon,alamat,foto, tujuan, waktu) VALUES ('$nama','$ktp','$telpon','$alamat','$foto','$tujuan', '$waktu' )");
    $dataTujuan = mysqli_query($db, "INSERT INTO tujuan (nama,tujuan) VALUES ('$nama','$tujuan')");

    
    if($kirim){
        echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:pemesanan.php");
    }else {
        echo "gagal mengirim";
    }
}