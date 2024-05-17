<?php
include '../../inc/conn.php';

$nisn = $_GET['nisn'];

$query = "DELETE FROM siswa WHERE nisn='$nisn'";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('Data berhasil dihapus!'); window.location.assign('../views/admin.php?url=siswa');</script>";
} else {
    echo "<script>alert('Data gagal dihapus!'); window.location.assign('../views/admin.php?url=siswa');</script>";
}
