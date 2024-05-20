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

    $nisn = htmlspecialchars($_POST['nisn']);
    $nis = htmlspecialchars($_POST['nis']);
    $nama = htmlspecialchars($_POST['nama']);
    $id_kelas = htmlspecialchars($_POST['id_kelas']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $no_telp = htmlspecialchars($_POST['no_telp']);
    $id_spp = htmlspecialchars($_POST['id_spp']);

    $query = "INSERT INTO siswa(nisn, nis, nama, id_kelas, alamat, no_telp, id_spp) VALUE ('$nisn', '$nis', '$nama', '$id_kelas', '$alamat', '$no_telp', '$id_spp')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil disimpan!'); window.location.assign('../views/admin.php?url=siswa');</script>";
    } else {
        echo "<script>alert('Data gagal tersimpan!'); window.location.assign('../views/admin.php?url=tambah-siswa');</script>";
    }
}

function edit()
{
    global $conn;

    $nisn = $_GET['nisn'];
    $nisnPost = htmlspecialchars($_POST['nisn']);
    $nis = htmlspecialchars($_POST['nis']);
    $nama = htmlspecialchars($_POST['nama']);
    $idKelas = htmlspecialchars($_POST['id_kelas']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $noTelp = htmlspecialchars($_POST['no_telp']);
    $idSpp = htmlspecialchars($_POST['id_spp']);

    $query = "UPDATE siswa SET nisn='$nisnPost', nis='$nis', nama='$nama', id_kelas='$idKelas', alamat='$alamat', no_telp='$noTelp', id_spp='$idSpp' WHERE nisn='$nisn'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil diubah!'); window.location.assign('../views/admin.php?url=siswa');</script>";
    } else {
        echo "<script>alert('Data gagal diubah!'); window.location.assign('../views/admin.php?url=siswa');</script>";
    }
}

function delete()
{
    global $conn;

    $nisn = $_GET['nisn'];

    $query = "DELETE FROM siswa WHERE nisn='$nisn'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil dihapus!'); window.location.assign('../views/admin.php?url=siswa');</script>";
    } else {
        echo "<script>alert('Data gagal dihapus!'); window.location.assign('../views/admin.php?url=siswa');</script>";
    }
}
