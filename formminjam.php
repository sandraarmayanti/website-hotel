<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<center>Form Peminjaman Buku Perpustakaan SNOWDROP
	<table border="1">
        <form action="prosessave.php" method="POST">
        <tr>
            <td>Kode Anggota : </td>
            <td><input type="number" name="kode"></td>
        </tr>
        <tr>
            <td>Nama Anggota : </td>
            <td><input type="text" name="nmanggota"></td>
        </tr>
        <tr>
            <td>Nama Buku : </td>
            <td><input type="text" name="nmbuku"></td>
        </tr>
        <tr>
            <td>Lama Pinjam : </td>
            <td><input type="number" name="lmpinjam"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Simpan"></td>
            <td><input type="reset" value="Batal"></td>
        </tr>
        </form>
</table>
</center>