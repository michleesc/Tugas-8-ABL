<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- CSS untuk table-->
    <style type="text/css">
        table, th, td
        {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <?php

    $mahasiswa = new SimpleXMLElement('http://localhost/abl_tugas8/data.xml', null, true);
    // menampilkan table dalam html
    echo "
<table>
<tr>
<th>NIM</th>
<th>NAMA</th>
<th>Fakultas</th>
<th>Prodi</th>
<th>Gender</th>
<th>Alamat</th>
</tr>
 
";
 
// melakukan looping penampilan data mahasiswa
foreach($mahasiswa as $id)
{
        echo "
<tr>
<td width='200'>{$id->NIM}</td>
<td width='200'>{$id->NAMA}</td>
<td width='200'>{$id->Fakultas}</td>
<td width='130'>{$id->Prodi}</td>
<td width='80'>{$id->Gender}</td>
<td width='130'>{$id->Alamat}</td>
</tr>
 
";
}
echo '</table>';
    ?>
</body>
</html>