<?php
include("koneksi.php");

if (isset($_POST['id_gallery'])) {

    $id_gallery = $_POST['id_gallery'];
    $gambar = $_POST['gambar'];

    $strsql = "UPDATE gallery SET gambar='$gambar' WHERE id_gallery=$id_gallery";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: list_gallery.php?status=sukses');
    } else {
        die("Location: list_gallery.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}