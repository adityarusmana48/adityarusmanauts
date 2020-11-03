<?php
//HAPUS
include "koneksi.php";
$id_about = $_GET['id_about'];
$result = mysqli_query($conn, "DELETE FROM about WHERE id_about = '$id_about'");
if ($result){ ?>
    <script language="javascript">
            alert('Berhasil Dihapus');
        document.location.href="list_about.php";
    </script>
<?php
}else {
        trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
}
?>