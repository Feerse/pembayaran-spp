<?php
include '../../inc/conn.php';

$id_petugas = $_GET['id_petugas'];
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars(md5($_POST['password']));
$nama_petugas = htmlspecialchars($_POST['nama_petugas']);
$level = htmlspecialchars($_POST['level']);

$query = "UPDATE petugas SET username='$username', password='$password', nama_petugas='$nama_petugas', level='$level' WHERE id_petugas='$id_petugas'";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('Data berhasil diubah!'); window.location.assign('../views/admin.php?url=petugas');</script>";
} else {
    echo "<script>alert('Data gagal diubah!'); window.location.assign('../views/admin.php?url=petugas');</script>";
}
