<?php
include '../../inc/conn.php';

$id_spp = $_GET['id_spp'];

$query = "DELETE FROM spp WHERE id_spp='$id_spp'";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('Data berhasil dihapus!'); window.location.assign('../views/admin.php?url=spp');</script>";
} else {
    echo "<script>alert('Data gagal dihapus!'); window.location.assign('../views/admin.php?url=spp');</script>";
}
