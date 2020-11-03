<?php
include("koneksi.php");

if (isset($_POST['id_contact'])) {

    $id_contact = $_POST['id_contact'];
    $google = $_POST['google'];
    $youtube = $_POST['youtube'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];
    $gambar = $_POST['gambar'];

    $strsql = "UPDATE contact SET google='$google', youtube='$youtube', facebook='$facebook', instagram='$instagram', gambar='$gambar' WHERE id_contact=$id_contact";
    $runSQL = mysqli_query($conn, $strsql);

    if ($runSQL) {
        header('Location: list_contact.php?status=sukses');
    } else {
        die("Location: list_contact.php?status=gagal");
    }
} else {
    die("Akses dilarang...");
}