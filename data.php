<?php
include "koneksi10.php";

?>
<center>
    <h1>Halaman Tampilan Penilaian</h1>
    <a><button href ="hotel.php">Tambah</button></a>
    <table border = "1" cellpadding = '10' cellspacing= '10'>
        <tr>
            <td>No</td>
            <td>Kode Anggota</td>
            <td>Nama Anggota</td>
            <td>Nama Hotel</td>
            <td>Kriteria</td>
            <td>Rangking</td>
        </tr>

        <?php
        $mysql = "SELECT * FROM tb_nilai";
        $baca = mysqli_query($db, $mysql); 
        while ($data=mysqli_fetch_array($baca)) {
            $kode = $data[1];
            $nmanggota = $data[2];
            $nmhotel = $data[3];
            $kriteria = $data[4];
            $rangking = $data[5];
            $id = $data[0];
        }
        ?>
        <tr>
            <td><?php echo $id?></td>
            <td><?php echo $kode?></td>
            <td><?php echo $nmanggota?></td>
            <td><?php echo $nmhotel?></td>
            <td><?php echo $kriteria?></td>
            <td><?php echo $rangking?></td>
        </tr>
        <?php
        $id++;
        ?>

    </table>
    </center>
    
