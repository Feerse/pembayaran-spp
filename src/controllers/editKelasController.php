<?php
include '../../inc/conn.php';

$id_kelas = $_GET['id_kelas'];
$namaKelas = htmlspecialchars($_POST['nama_kelas']);
$kompetensiKeahlian = htmlspecialchars($_POST['kompetensi_keahlian']);

$query = "UPDATE kelas SET nama_kelas='$namaKelas', kompetensi_keahlian='$kompetensiKeahlian' WHERE id_kelas='$id_kelas'";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('Data berhasil diubah!'); window.location.assign('../views/admin.php?url=kelas');</script>";
} else {
    echo "<script>alert('Data gagal diubah!'); window.location.assign('../views/admin.php?url=kelas');</script>";
}
