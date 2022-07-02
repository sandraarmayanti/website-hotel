<?php
include "koneksi3.php";

$kodemenu = $_POST['kode'];
$nmmenu = $_POST['nmenu'];
$hrg = $_POST['harga'];
$jns = $_POST['jenis'];
$brt = $_POST['berat'];



$sql = "INSERT INTO tb_menumakan (kode_menu, nama_menu, Harga, Jenis, Berat) 
        VALUES ('$kodemenu', '$nmmenu', '$hrg', '$jns', '$brt')";
$baca = mysqli_query($db, $sql);

if ($baca) {
    echo "<script>
    alert('Data Berhasil Tersimpan');
    window.location='viewdata5.php';
    </script>
    ";
}
else{
    echo "<script>
    alert('Data Gagal Tersimpan');
    window.location='forminsert.php';
    </script>
    ";
}

?>