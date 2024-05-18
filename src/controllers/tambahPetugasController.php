<?php
include '../../inc/conn.php';

$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars(md5($_POST['password']));
$nama_petugas = htmlspecialchars($_POST['nama_petugas']);
$level = htmlspecialchars($_POST['level']);

$query = "INSERT INTO petugas(username, password, nama_petugas, level) VALUES('$username', '$password', '$nama_petugas', '$level')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('Data berhasil disimpan!'); window.location.assign('../views/admin.php?url=petugas');</script>";
} else {
    echo "<script>alert('Data gagal tersimpan!'); window.location.assign('../views/admin.php?url=tambah-petugas');</script>";
}
