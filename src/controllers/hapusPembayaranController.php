<?php
include '../../inc/conn.php';

$id_pembayaran = $_GET['id_pembayaran'];

$query = "DELETE FROM pembayaran WHERE id_pembayaran='$id_pembayaran'";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('Data berhasil dihapus!'); window.history.go(-1)</script>";
} else {
    echo "<script>alert('Data gagal dihapus!'); window.history.go(-1)</script>";
}
