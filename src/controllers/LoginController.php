<?php
include '../../inc/conn.php';

if (isset($_GET['login_as'])) {
    $login_as = $_GET['login_as'];

    switch ($login_as) {
        case 'admin':
            admin();
            break;

        case 'siswa':
            siswa();
            break;

        default:
            echo "<script>alert('Aksi tidak dikenal!'); history.back();</script>";
            break;
    }
} else {
    echo "<script>alert('Aksi gagal!'); history.back();</script>";
}


function admin()
{
    global $conn;

    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars(md5($_POST['password']));

    $query = "SELECT * FROM petugas WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_array($result);
        session_start();
        $_SESSION['id_petugas'] = $data['id_petugas'];
        $_SESSION['nama_petugas'] = $data['nama_petugas'];
        $_SESSION['level'] = $data['level'];

        if ($data['level'] == 'admin') {
            header('Location:../views/admin.php');
        } else if ($data['level'] == 'petugas') {
            header('Location:../views/petugas.php');
        }
    } else {
        echo "<script>
        alert('Username atau Password Anda Salah!');
        window.location.assign('../views/loginAdmin.php');
        </script>";
    }
}

function siswa()
{
    global $conn;

    $nisn = $_POST['nisn'];
    $nis = $_POST['nis'];

    $query = "SELECT * FROM siswa WHERE nisn='$nisn' AND nis='$nis'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        session_start();
        $data = mysqli_fetch_array($result);
        $_SESSION['nisn'] = $data['nisn'];
        $_SESSION['nama'] = $data['nama'];

        header('Location: ../views/siswa.php');
    } else {
        echo "<script>
    alert('NISN atau NIS Anda Salah!');
    window.location.assign('../../index.php');
    </script>";
    }
}
