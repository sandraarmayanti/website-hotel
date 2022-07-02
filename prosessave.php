<?php
include "koneksi2.php";

$kodeanggota = $_POST['kode'];
$nmanggota = $_POST['nmanggota'];
$nmbuku = $_POST['nmbuku'];
$lmpinjam = $_POST['lmpinjam']

$sql = " INSERT INTO tb_nilai (kode_anggota, nama_anggota, nama_buku, lama_pinjam) VALUES ('$kodeanggota', '$nmanggota', '$nmbuku', '$lmapinjam)";
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