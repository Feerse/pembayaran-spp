<?php
include '../../inc/conn.php';

$id_spp = $_GET['id_spp'];
$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

$query = "UPDATE spp SET tahun='$tahun', nominal='$nominal' WHERE id_spp='$id_spp'";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "<script>alert('Data berhasil diubah!'); window.location.assign('../views/admin.php?url=spp');</script>";
} else {
    echo "<script>alert('Data gagal diubah!'); window.location.assign('../views/admin.php?url=spp');</script>";
}
