<?php
session_start();

if (empty($_SESSION['id_petugas'])) {
    echo "<script>
    alert('Maaf, Anda belum login!');
    window.location.assign('../../index.php');
    </script>";
}
if ($_SESSION['level'] != 'petugas') {
    echo "<script>
    alert('Maaf, Anda bukan sesi Petugas!');
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
    <title>Petugas - Aplikasi Pembayaran SPP</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script> <!-- Jaga-jaga jika style.css tidak ter-update -->
</head>

<body class="text-gray-700">
    <div class="container mx-auto p-9">
        <h3 class="font-bold text-4xl">Aplikasi Pembayaran SPP</h3>
        <div class="p-4 my-4 bg-blue-100 border border-blue-400 rounded">
            Anda login sebagai Petugas <b><?= $_SESSION['nama_petugas'] ?></b>
        </div>
        <br />
        <ul class="flex flex-wrap gap-y-[27px] justify-center">
            <li class="inline-block"><a class="py-4 px-11 my-1 bg-blue-500 hover:bg-blue-600 duration-300 text-white shadow" href="petugas.php">Petugas</a></li>
            <li class="inline-block"><a class="py-4 px-11 my-1 bg-blue-500 hover:bg-blue-600 duration-300 text-white shadow" href="petugas.php?url=pembayaran">Pembayaran</a></li>
            <li class="inline-block"><a class="py-4 px-11 my-1 bg-blue-500 hover:bg-blue-600 duration-300 text-white shadow" href="../controllers/LogoutController.php">Logout</a></li>
        </ul>
        <br />

        <div class="p-8 mt-4 border rounded-md">
            <div class="card">
                <?php
                $file = isset($_GET['url']) ? $_GET['url'] : ''; // cek apakah pada URL terdapat param 'url'
                if (empty($file)) :
                ?>
                    <h4 class="font-bold text-xl mb-2">Selamat Datang di Halaman Petugas!</h4>
                    <p>Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa/siswa di sekolah.</p>
                <?php else :
                    include "../views/layouts/$file.php";
                ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>