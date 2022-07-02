<?php
include "koneksi2.php";
?>
<center>
    <h1>Halaman Tampilan Peminjam</h1>
    <a><button href ="formminjam.php">Tambah</button></a>
    <table border="1" cellpadding = '10' cellspacing = '10'>
        <tr>
            <td>No</td>
            <td>Kode Anggota</td>
            <td>Nama Anggota</td>
            <td>Nama Buku</td>
            <td>Lama Pinjam</td>
        </tr>
        <?php
        $mysql = "SELECT * FROM tb_pinjaman";
        $baca = mysqli_query($db, $mysql); //fungsi di php untuk membaca perintah sql
        $no = 1;
        while ($data=mysqli_fetch_array($baca)) {
            $kode = $data['kode_anggota'];
            $nmanggota = $data[2];
            $nmbuku = $data[3];
            $lmpinjam = $data[4];
            $id = $data[0];
            ?>
            <tr>
                <td><?php echo $no?></td>
                <td><?php echo $kode?></td>
                <td><?php echo $nmanggota?></td>
                <td><?php echo $nmbuku?></td>
                <td><?php echo $lmpinjam?></td>
            </tr>
        <?php
        $no++;
        } 
        ?>

    </table>
</center>
