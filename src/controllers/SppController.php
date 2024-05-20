<?php
include '../../inc/conn.php';

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'add':
            add();
            break;

        case 'edit':
            edit();
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

    $tahun = htmlspecialchars($_POST['tahun']);
    $nominal = htmlspecialchars($_POST['nominal']);

    $query = "INSERT INTO spp(tahun, nominal) VALUES('$tahun', '$nominal')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil disimpan!'); window.location.assign('../views/admin.php?url=spp');</script>";
    } else {
        echo "<script>alert('Data gagal tersimpan!'); window.location.assign('../views/admin.php?url=tambah-spp');</script>";
    }
}

function edit()
{
    global $conn;

    $id_spp = $_GET['id_spp'];
    $tahun = htmlspecialchars($_POST['tahun']);
    $nominal = htmlspecialchars($_POST['nominal']);

    $query = "UPDATE spp SET tahun='$tahun', nominal='$nominal' WHERE id_spp='$id_spp'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil diubah!'); window.location.assign('../views/admin.php?url=spp');</script>";
    } else {
        echo "<script>alert('Data gagal diubah!'); window.location.assign('../views/admin.php?url=spp');</script>";
    }
}

function delete()
{
    global $conn;

    $id_spp = $_GET['id_spp'];

    $query = "DELETE FROM spp WHERE id_spp='$id_spp'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil dihapus!'); window.location.assign('../views/admin.php?url=spp');</script>";
    } else {
        echo "<script>alert('Data gagal dihapus!'); window.location.assign('../views/admin.php?url=spp');</script>";
    }
}
