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
        $id_contact = $_POST['id_contact'];
        $google = $_POST['google'];
        $youtube = $_POST['youtube'];
        $facebook = $_POST['facebook'];
        $instagram = $_POST['instagram'];
        $gambar = $_POST['gambar'];


        $sql = "INSERT INTO contact (id_contact, google, youtube, facebook, instagram, gambar)
        VALUES ('$id_contact', '$google', '$youtube', '$facebook', '$instagram', '$gambar')";

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