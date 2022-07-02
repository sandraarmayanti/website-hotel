<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<center>Form Tampilan Menu
	<table border="1">
        <form action="prosessimpan.php" method="POST">
        <tr>
            <td> Kode Menu : </td>
            <td><input type="text" name="kode"></td>
        </tr>
        <tr>
            <td> Nama Menu : </td>
            <td><input type="text" name="nmenu"></td>
        </tr>
        <tr>
            <td> Harga : </td>
            <td><input type="text" name="harga"></td>
        </tr>
        <tr>
            <td> Jenis : </td>
            <td><select name="jenis">
                    <option> Makanan </option>
                    <option> Minuman </option>
                </select>
            </td>
        </tr>
        <tr>
            <td> Berat : </td>
            <td><input type="text" name="berat"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Simpan"></td>
        </tr>
        </form>
        </center>
</table>