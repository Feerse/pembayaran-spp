<?php
include '../../inc/conn.php';

$namaKelas = $_POST['nama_kelas'];
$kompetensiKeahlian = $_POST['kompetensi_keahlian'];

$query = "INSERT INTO kelas(nama_kelas, kompetensi_keahlian) VALUES('$namaKelas', '$kompetensiKeahlian')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('Data berhasil disimpan!'); window.location.assign('../views/admin.php?url=./layouts/kelas');</script>";
} else {
    echo "<script>alert('Data gagal tersimpan!'); window.location.assign('../views/admin.php?url=./layouts/tambah-kelas');</script>";
}
