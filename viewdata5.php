<?php
include "koneksi3.php";


?>

<center>
    <h1>Halaman Tampil Menu</h1>
    <a><button href ="forminsert.php">Tambah</button></a>
    <table border="1" cellpadding = '10' cellspacing = '10'>
        <tr>
            <td>No</td>
            <td>Jenis Menu</td>
            <td>Kode Menu</td>
            <td>Nama Menu</td>
            <td>Harga</td>
            <td>Berat</td>
        </tr>
        <?php
        $mysql = "SELECT * FROM tb_menumakan";
        $baca = mysqli_query($db, $mysql); //fungsi di php untuk membaca perintah sql
        $no = 1;
        while ($data=mysqli_fetch_array($baca)) {
            $kode = $data['kode_menu'];
            $nmmenu = $data[2];
            $hrg = $data[3];
            $jns = $data[4];
            $brt = $data[5];
            $id = $data[0];
            ?>
            <tr>
                <td><?php echo $no?></td>
                <td><?php echo $jns?></td>
                <td><?php echo $kode?></td>
                <td><?php echo $nmmenu?></td>
                <td><?php echo $hrg?></td>
                <td><?php echo $brt?></td>
            </tr>
        <?php
        $no++;
        } 
        ?>

    </table>
</center>
