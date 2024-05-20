<?php
include '../../inc/conn.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'add':
            add();
            break;

        case 'delete':
            delete();
            break;

        default:
            echo "<script>alert('Aksi tidak dikenal!'); history.back();</script>";
            break;
    }
} else {
    echo "<script>alert('Aksi gagal!'); history.back();</script>";
}

function add()
{
    global $conn;

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
}

function delete()
{
    global $conn;

    $id_pembayaran = $_GET['id_pembayaran'];

    $query = "DELETE FROM pembayaran WHERE id_pembayaran='$id_pembayaran'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil dihapus!'); window.history.go(-1)</script>";
    } else {
        echo "<script>alert('Data gagal dihapus!'); window.history.go(-1)</script>";
    }
}
