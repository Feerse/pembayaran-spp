<?php
session_start();

if (empty($_SESSION['id_petugas'])) {
    echo "<script>
    alert('Maaf, Anda belum login!');
    window.location.assign('../../index.php');
    </script>";
}
if ($_SESSION['level'] != 'admin') {
    echo "<script>
    alert('Maaf, Anda bukan sesi Admin!');
    window.location.assign('../../index.php');
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Aplikasi Pembayaran SPP</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body class="text-gray-700">
    <div class="container mx-auto p-9">
        <h3 class="font-bold text-4xl">Aplikasi Pembayaran SPP</h3>
        <div class="p-4 my-4 bg-blue-100 border border-blue-400 rounded">
            Anda login sebagai <b>Administrator</b>
        </div>
        <a class="inline-block p-3 my-1 bg-blue-500 text-white rounded-md shadow" href="admin.php">Administrator</a>
        <a class="inline-block p-3 my-1 bg-blue-500 text-white rounded-md shadow" href="admin.php?url=spp">SPP</a>
        <a class="inline-block p-3 my-1 bg-blue-500 text-white rounded-md shadow" href="admin.php?url=kelas">Kelas</a>
        <a class="inline-block p-3 my-1 bg-blue-500 text-white rounded-md shadow" href="admin.php?url=siswa">Siswa</a>
        <a class="inline-block p-3 my-1 bg-blue-500 text-white rounded-md shadow" href="admin.php?url=petugas">Petugas</a>
        <a class="inline-block p-3 my-1 bg-blue-500 text-white rounded-md shadow" href="admin.php?url=pembayaran">Pembayaran</a>
        <a class="inline-block p-3 my-1 bg-blue-500 text-white rounded-md shadow" href="admin.php?url=laporan">Laporan</a>
        <a class="inline-block p-3 my-1 bg-blue-500 text-white rounded-md shadow" href="../controllers/logout.php">Logout</a>

        <div class="p-8 mt-4 border rounded-md">
            <div class="card">
                <?php
                $file = isset($_GET['url']) ? $_GET['url'] : ''; // cek apakah pada URL terdapat param 'url'
                if (empty($file)) :
                ?>
                    <h4 class="font-bold text-xl mb-2">Selamat Datang di Halaman Administrator!</h4>
                    <p>Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa/siswa di sekolah.</p>
                <?php else :
                    include "../views/$file.php";
                ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>