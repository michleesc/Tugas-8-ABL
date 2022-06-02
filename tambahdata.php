<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>
    <h3>FORM TAMBAH DATA</h3>
    <form action="simpandata.php" method="post">
    <table align="center" width="60%" bgcolor="grey">
        <tr>
            <td>NIM</td>
            <td> : </td>
            <td>
                <input type="text" name="nim" size="20" placeholder="Masukkan NIM">
            </td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td> : </td>
            <td>
                <input type="text" name="nama" size="30" placeholder="Masukkan NAMA">
            </td>
        </tr>
        <tr>
            <td>Fakultas</td>
            <td> : </td>
            <td>
                <input type="text" name="fakultas" size="30" placeholder="Masukkan Fakultas">
            </td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td> : </td>
            <td>
                <input type="text" name="prodi" size="30" placeholder="Masukkan Prodi">
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td> : </td>
            <td>
                <input type="text" name="gender" size="30" placeholder="Masukkan Gender">
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> : </td>
            <td>
                <textarea name="alamat" size="255" placeholder="Masukkan Alamat"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" name="simpan" value="Simpan">
                <input type="reset" name="batal" value="Batal">
                <input type="button" name="kembali" value="Kembali" onclick="self.history.back()">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>