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
        $id_portofolio = $_POST['id_portofolio'];
        $nonakademik1 = $_POST['nonakademik1'];
        $nonakademik2 = $_POST['nonakademik2'];
        $nonakademik3 = $_POST['nonakademik3'];
        $akademik1 = $_POST['akademik1'];
        $akademik2 = $_POST['akademik2'];
        $akademik3 = $_POST['akademik3'];
       


        $sql = "INSERT INTO portofolio (id_portofolio, nonakademik1, nonakademik2, nonakademik3, akademik1, akademik2, akademik3)
        VALUES ('$id_portofolio', '$nonakademik1', '$nonakademik2', '$nonakademik3', '$akademik1', '$akademik2', '$akademik3')";

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