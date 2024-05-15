<?php
include '../../inc/conn.php';

$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$id_spp = $_POST['id_spp'];

$query = "INSERT INTO siswa(nisn, nis, nama, id_kelas, alamat, no_telp, id_spp) VALUE ('$nisn', '$nis', '$nama', '$id_kelas', '$alamat', '$no_telp', '$id_spp')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('Data berhasil disimpan!'); window.location.assign('../views/admin.php?url=./layouts/siswa');</script>";
} else {
    echo "<script>alert('Data gagal tersimpan!'); window.location.assign('../views/admin.php?url=./layouts/tambah-siswa');</script>";
}
