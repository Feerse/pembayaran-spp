<?php
include '../../inc/conn.php';

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
    alert('Username atau Password Anda Salah!');
    window.location.assign('../../index.php');
    </script>";
}
