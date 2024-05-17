<?php
include '../../inc/conn.php';

$nisn = $_GET['nisn'];
$nisnPost = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$idKelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$noTelp = $_POST['no_telp'];
$idSpp = $_POST['id_spp'];

$query = "UPDATE siswa SET nisn='$nisnPost', nis='$nis', nama='$nama', id_kelas='$idKelas', alamat='$alamat', no_telp='$noTelp', id_spp='$idSpp' WHERE nisn='$nisn'";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('Data berhasil diubah!'); window.location.assign('../views/admin.php?url=siswa');</script>";
} else {
    echo "<script>alert('Data gagal diubah!'); window.location.assign('../views/admin.php?url=siswa');</script>";
}
