<?php
include '../../inc/conn.php';

session_start();
$id_petugas = $_SESSION['id_petugas'];
$nisn = htmlspecialchars($_POST['nisn']);
$tgl_bayar = htmlspecialchars($_POST['tgl_bayar']);
$id_spp = htmlspecialchars($_POST['id_spp']);
$jumlah_bayar = htmlspecialchars($_POST['jumlah_bayar']);

list($tahun, $bulan, $tanggal) = explode('-', $tgl_bayar);

$query = "INSERT INTO pembayaran(id_petugas, nisn, tgl_bayar, bulan_dibayar, tahun_dibayar, id_spp, jumlah_bayar) VALUES('$id_petugas', '$nisn', '$tgl_bayar', '$bulan', '$tahun', '$id_spp', '$jumlah_bayar')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('Data berhasil disimpan!');";
    if ($_SESSION['level'] == 'admin') {
        echo "window.location.assign('../views/admin.php?url=pembayaran');</script>";
    } else {
        echo "window.location.assign('../views/petugas.php?url=pembayaran');</script>";
    }
} else {
    echo "<script>alert('Data gagal tersimpan!');";
    if ($_SESSION['level'] == 'admin') {
        echo "window.location.assign('../views/admin.php?url=tambah-pembayaran');</script>";
    } else {
        echo "window.location.assign('../views/petugas.php?url=tambah-pembayaran');</script>";
    }
}
