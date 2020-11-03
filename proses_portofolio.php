<?php
include("koneksi.php");

if (isset($_POST['id_portofolio'])) {

    $id_portofolio = $_POST['id_portofolio'];
    $nonakademik1 = $_POST['nonakademik1'];
    $nonakademik2 = $_POST['nonakademik2'];
    $nonakademik3 = $_POST['nonakademik3'];
    $akademik1 = $_POST['akademik1'];
    $akademik2 = $_POST['akademik2'];
    $akademik3 = $_POST['akademik3'];

    $strsql = "UPDATE portofolio SET nonakademik1='$nonakademik1', nonakademik2='$nonakademik2', nonakademik3='$nonakademik3', akademik1='$akademik1', akademik2='$akademik2', akademik3='$akademik3' WHERE id_portofolio=$id_portofolio";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: list_portofolio.php?status=sukses');
    } else {
        die("Location: list_portofolio.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}