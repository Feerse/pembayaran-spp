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

    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars(md5($_POST['password']));
    $nama_petugas = htmlspecialchars($_POST['nama_petugas']);
    $level = htmlspecialchars($_POST['level']);

    $query = "INSERT INTO petugas(username, password, nama_petugas, level) VALUES('$username', '$password', '$nama_petugas', '$level')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil disimpan!'); window.location.assign('../views/admin.php?url=petugas');</script>";
    } else {
        echo "<script>alert('Data gagal tersimpan!'); window.location.assign('../views/admin.php?url=tambah-petugas');</script>";
    }
}

function edit()
{
    global $conn;

    $id_petugas = $_GET['id_petugas'];
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars(md5($_POST['password']));
    $nama_petugas = htmlspecialchars($_POST['nama_petugas']);
    $level = htmlspecialchars($_POST['level']);

    $query = "UPDATE petugas SET username='$username', password='$password', nama_petugas='$nama_petugas', level='$level' WHERE id_petugas='$id_petugas'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil diubah!'); window.location.assign('../views/admin.php?url=petugas');</script>";
    } else {
        echo "<script>alert('Data gagal diubah!'); window.location.assign('../views/admin.php?url=petugas');</script>";
    }
}

function delete()
{
    global $conn;

    $id_petugas = $_GET['id_petugas'];

    $query = "DELETE FROM petugas WHERE id_petugas='$id_petugas'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil dihapus!'); window.location.assign('../views/admin.php?url=petugas');</script>";
    } else {
        echo "<script>alert('Data gagal dihapus!'); window.location.assign('../views/admin.php?url=petugas');</script>";
    }
}
