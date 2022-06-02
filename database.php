<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <table border="1" align="center" width="100%">
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>Fakultas</th>
            <th>Prodi</th>
            <th>Gender</th>
            <th>Alamat</th>
        </tr>
        <tr>
            <?php
                //koneksi ke database
                $connection = mysqli_connect("localhost", "root", "", "data_xml") or die("Error " . mysqli_error($connection));
                $xml = new SimpleXMLElement('<xml/>');
                //menampilkan data dari database, table mahasiswa
                $sql = "Select * from mahasiswa ";
                $result = mysqli_query($connection, $sql) or die("Error " . mysqli_error($connection));
                while ($data = mysqli_fetch_array($result)) {
            ?>
            <td><?php echo $data['NIM']; ?></td>
            <td><?php echo $data['NAMA']; ?></td>
            <td><?php echo $data['Fakultas']; ?></td>
            <td><?php echo $data['Prodi']; ?></td>
            <td><?php echo $data['Gender']; ?></td>
            <td><?php echo $data['Alamat']; ?></td>
        </tr>
        <?php
                }
        ?>
    </table>
    <a href="tambahdata.php" ><button>Tambah data</button></a>
</body>
</html>