<?php
include '../../inc/conn.php';

$id_kelas = $_GET['id_kelas'];

$query = "DELETE FROM kelas WHERE id_kelas='$id_kelas'";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('Data berhasil dihapus!'); window.location.assign('../views/admin.php?url=./layouts/kelas');</script>";
} else {
    echo "<script>alert('Data gagal dihapus!'); window.location.assign('../views/admin.php?url=./layouts/kelas');</script>";
}
