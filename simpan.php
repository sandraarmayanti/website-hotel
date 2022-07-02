<?php
include "koneksi10.php";

$kodeanggota = $_POST['kode_anggota'];
$nmanggota = $_POST['nama_anggota'];
$nmhotel = $_POST['nama_hotel'];
$kriteria = $_POST['kriteria'];
$rangking = $_POST['rangking'];

$sql = " INSERT INTO tb_nilai (kode_anggota, nama_anggota, nama_hotel, kriteria, rangking) VALUES ( '$kodeanggota', '$nmanggota', '$nmhotel', '$kriteria', '$rangking')";
$baca = mysqli_query($db, $sql);

if ($baca) {
    echo "<script>
    alert('Data Berhasil Tersimpan');
    window.location='data.php';
    </script>
    ";
}
else{
    echo "<script>
    alert('Data Gagal Tersimpan');
    window.location='hotel.php';
    </script>
    ";
}

?>