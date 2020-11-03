<?php
//HAPUS
include "koneksi.php";
$id_home = $_GET['id_home'];
$result = mysqli_query($conn, "DELETE FROM home WHERE id_home = '$id_home'");
if ($result){ ?>
    <script language="javascript">
            alert('Berhasil Dihapus');
        document.location.href="list_home.php";
    </script>
<?php
}else {
        trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
}
?>