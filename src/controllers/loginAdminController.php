<?php
include '../../inc/conn.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

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
