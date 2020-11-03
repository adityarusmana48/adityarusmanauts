<?php
include("koneksi.php");

if (isset($_POST['id_about'])) {

    $id_about = $_POST['id_about'];
    $nama = $_POST['nama'];
    $tentang = $_POST['tentang'];

    $strsql = "UPDATE about SET nama='$nama', tentang='$tentang' WHERE id_about=$id_about";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: list_about.php?status=sukses');
    } else {
        die("Location: list_about.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}