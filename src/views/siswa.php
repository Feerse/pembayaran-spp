<?php
session_start();

if (empty($_SESSION['nisn'])) {
    echo "<script>
    alert('Maaf, Anda belum login!');
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
    <title>Siswa - Aplikasi Pembayaran SPP</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script> <!-- Jaga-jaga jika style.css tidak ter-update -->
</head>

<body class="text-gray-700">
    <div class="container mx-auto p-9">
        <h3 class="font-bold text-4xl">Aplikasi Pembayaran SPP</h3>
        <div class="p-4 my-4 bg-blue-100 border border-blue-400 rounded">
            Anda login sebagai siswa <b><?= $_SESSION['nama'] ?></b>
        </div>
        <a class="absolute right-0 top-0 m-8 py-1 px-3 rounded-md bg-red-500 hover:bg-red-600 duration-300 text-white shadow" href="../controllers/logoutController.php">Logout</a>

        <div class="p-8 mt-4 border rounded-md">
            <div class="card">
                <?php
                $file = isset($_GET['url']) ? $_GET['url'] : ''; // cek apakah pada URL terdapat param 'url'
                if (empty($file)) :
                ?>
                    <h4 class="font-bold text-xl mb-2">Selamat Datang di Halaman Siswa!</h4>
                    <p class="mb-5">Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa/siswa di sekolah.</p>
                    <hr class="mb-5" />
                <?php
                    include '../views/layouts/riwayat-pembayaran.php';
                endif;
                ?>
            </div>
        </div>
    </div>
</body>

</html>