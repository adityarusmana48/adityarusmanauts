<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Konfirmasi Pendaftaran</title>
</head>
<body>
<?php
    include_once "koneksi.php";
    if (isset($_POST['tombolSubmit'])) {
        $id_home = $_POST['id_home'];
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];
        $gambar = $_POST['gambar'];


        $sql = "INSERT INTO home (id_home, nama, deskripsi, gambar)
        VALUES ('$id_home', '$nama', '$deskripsi', '$gambar')";

        if (mysqli_query($conn, $sql)) {
            echo "Data berhasil diinput";
        }
        else {
            echo "Data tidak berhasil diinput pada string sql: <br>
            $sql <br> dg error: ".mysqli_error($conn);
        }
    
?>
<?php
   }
   else{
    echo "Mohon maaf konfirmasi tidak bs diakses";
   }
?>
</body>

</html>