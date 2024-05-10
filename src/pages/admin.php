<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Aplikasi Pembayaran SPP</title>
    <link rel="stylesheet" href="../css/style.css?ver=1">
</head>

<body class="text-gray-700">
    <div class="container m-auto p-9">
        <h3 class="font-extrabold text-4xl">Aplikasi Pembayaran SPP</h3>
        <div class="p-4 my-4 bg-blue-100 border border-blue-400 rounded">
            Anda login sebagai <b>Administrator</b>
        </div>
        <a class="p-3 bg-blue-500 text-white rounded-md" href="admin.php">Administrator</a>
        <a class="p-3 bg-blue-500 text-white rounded-md" href="admin.php?url=spp">SPP</a>
        <a class="p-3 bg-blue-500 text-white rounded-md" href="admin.php?url=kelas">Kelas</a>
        <a class="p-3 bg-blue-500 text-white rounded-md" href="admin.php?url=siswa">Siswa</a>
        <a class="p-3 bg-blue-500 text-white rounded-md" href="admin.php?url=petugas">Petugas</a>
        <a class="p-3 bg-blue-500 text-white rounded-md" href="admin.php?url=pembayaran">Pembayaran</a>
        <a class="p-3 bg-blue-500 text-white rounded-md" href="admin.php?url=laporan">Laporan</a>
        <a class="p-3 bg-blue-500 text-white rounded-md" href="admin.php?=logout">Logout</a>

        <div class="mt-8">
            <div class="card">
                <?php
                $file = isset($_GET['url']) ? $_GET['url'] : ''; // cek apakah pada URL terdapat param 'url'
                if (empty($file)) :
                ?>
                    <h4 class="font-bold text-xl mb-2">Selamat Datang di Halaman Administrator!</h4>
                    <p>Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa/siswa di sekolah.</p>
                <?php else :
                    include "$file.php";
                ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>