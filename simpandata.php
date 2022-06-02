<?php
    //koneksi ke database
    $connection = mysqli_connect("localhost", "root", "", "data_xml") or die("Error " . mysqli_error($connection));
    $xml = new SimpleXMLElement('<xml/>');

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $fakultas = $_POST['fakultas'];
    $prodi = $_POST['prodi'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];

    $simpan = mysqli_query($connection, "insert into mahasiswa values ('$nim', '$nama', '$fakultas', '$prodi', '$gender', '$alamat')");

    if ($simpan){
        echo "<script> alert ('Data berhasil disimpan')</script>";
        header ("refresh:0;database.php");
    }else {
        echo "<script> alert ('Data tidak berhasil disimpan')</script>";
        header ("refresh:0;database.php");
    }

?>