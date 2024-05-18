<?php
include '../../inc/conn.php';

$id_petugas = $_GET['id_petugas'];

$query = "DELETE FROM petugas WHERE id_petugas='$id_petugas'";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('Data berhasil dihapus!'); window.location.assign('../views/admin.php?url=petugas');</script>";
} else {
    echo "<script>alert('Data gagal dihapus!'); window.location.assign('../views/admin.php?url=petugas');</script>";
}
