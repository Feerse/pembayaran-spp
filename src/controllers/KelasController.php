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

    $namaKelas = htmlspecialchars($_POST['nama_kelas']);
    $kompetensiKeahlian = htmlspecialchars($_POST['kompetensi_keahlian']);

    $query = "INSERT INTO kelas(nama_kelas, kompetensi_keahlian) VALUES('$namaKelas', '$kompetensiKeahlian')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil disimpan!'); window.location.assign('../views/admin.php?url=kelas');</script>";
    } else {
        echo "<script>alert('Data gagal tersimpan!'); window.location.assign('../views/admin.php?url=tambah-kelas');</script>";
    }
}

function edit()
{
    global $conn;

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
}

function delete()
{
    global $conn;

    $id_kelas = $_GET['id_kelas'];

    $query = "DELETE FROM kelas WHERE id_kelas='$id_kelas'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil dihapus!'); window.location.assign('../views/admin.php?url=kelas');</script>";
    } else {
        echo "<script>alert('Data gagal dihapus!'); window.location.assign('../views/admin.php?url=kelas');</script>";
    }
}
