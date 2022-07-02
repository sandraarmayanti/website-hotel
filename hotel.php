<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<center>PENILAIAN HOTEL
	<table border="1">
        <form action="simpan.php" method="POST">
        <tr>
            <td>Kode Anggota : </td>
            <td><input type="number" name="kode"></td>
        </tr>
        <tr>
            <td>Nama Anggota : </td>
            <td><input type="text" name="nmanggota"></td>
        </tr>
        <tr>
            <td>Nama Hotel : </td>
            <td><input type="text" name="nmhotel"></td>
        </tr>
        <tr>
            <td>Kriteria : </td>
            <td><input type="number" name="kriteria"></td>
        </tr>
        <tr>
            <td>Rangking : </td>
            <td><input type="number" name="rangking"></td>
        <tr>
            <td><input type="submit" value="Simpan"></td>
            <td><input type="reset" value="Batal"></td>
        </tr>
        </form>
</table>
</center>