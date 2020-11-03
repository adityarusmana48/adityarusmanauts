<?php
//HAPUS
include "koneksi.php";
$id_contact = $_GET['id_contact'];
$result = mysqli_query($conn, "DELETE FROM contact WHERE id_contact = '$id_contact'");
if ($result){ ?>
    <script language="javascript">
            alert('Berhasil Dihapus');
        document.location.href="list_contact.php";
    </script>
<?php
}else {
        trigger_error('Perintah SQL Salah: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
}
?>