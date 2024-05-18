<?php
include '../../inc/conn.php';

$nisn = htmlspecialchars($_POST['nisn']);
$nis = htmlspecialchars($_POST['nis']);
$nama = htmlspecialchars($_POST['nama']);
$id_kelas = htmlspecialchars($_POST['id_kelas']);
$alamat = htmlspecialchars($_POST['alamat']);
$no_telp = htmlspecialchars($_POST['no_telp']);
$id_spp = htmlspecialchars($_POST['id_spp']);

$query = "INSERT INTO siswa(nisn, nis, nama, id_kelas, alamat, no_telp, id_spp) VALUE ('$nisn', '$nis', '$nama', '$id_kelas', '$alamat', '$no_telp', '$id_spp')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('Data berhasil disimpan!'); window.location.assign('../views/admin.php?url=siswa');</script>";
} else {
    echo "<script>alert('Data gagal tersimpan!'); window.location.assign('../views/admin.php?url=tambah-siswa');</script>";
}
