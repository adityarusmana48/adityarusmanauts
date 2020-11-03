<?php
//HAPUS
include "koneksi.php";
$id_portofolio = $_GET['id_portofolio'];
$result = mysqli_query($conn, "DELETE FROM portofolio WHERE id_portofolio = '$id_portofolio'");
if ($result){ ?>
    <script language="javascript">
            alert('Berhasil Dihapus');
        document.location.href="list_portofolio.php";
    </script>
<?php
}else {
        trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
}
?>