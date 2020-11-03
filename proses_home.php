<?php
include("koneksi.php");

if (isset($_POST['id_home'])) {

    $id_home = $_POST['id_home'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar'];

    $strsql = "UPDATE home SET nama='$nama', deskripsi='$deskripsi', gambar='$gambar' WHERE id_home=$id_home";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: list_home.php?status=sukses');
    } else {
        die("Location: list_home.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}