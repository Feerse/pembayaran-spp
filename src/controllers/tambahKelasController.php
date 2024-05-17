<?php
include '../../inc/conn.php';

$namaKelas = htmlspecialchars($_POST['nama_kelas']);
$kompetensiKeahlian = htmlspecialchars($_POST['kompetensi_keahlian']);

$query = "INSERT INTO kelas(nama_kelas, kompetensi_keahlian) VALUES('$namaKelas', '$kompetensiKeahlian')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('Data berhasil disimpan!'); window.location.assign('../views/admin.php?url=kelas');</script>";
} else {
    echo "<script>alert('Data gagal tersimpan!'); window.location.assign('../views/admin.php?url=tambah-kelas');</script>";
}
