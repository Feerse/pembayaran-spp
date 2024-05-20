<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Siswa - Aplikasi Pembayaran SPP</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script> <!-- Jaga-jaga jika style.css tidak ter-update -->
</head>

<body class="bg-gray-200 text-gray-700">
    <div class="flex justify-center items-center h-[100vh]">
        <div class="w-full max-w-sm">
            <form action="./src/controllers/LoginSiswaController.php" method="post" class="bg-white shadow-md rounded-md px-8 pt-6 pb-8 mb-4">
                <h1 class="font-bold text-center mb-4 text-2xl">Login Siswa</h1>
                <img src="./assets/logo-spp.png" alt="logo-spp" class="mb-5">
                <div class="mb-4">
                    <label class="block font-bold mb-2" for="NISN">
                        NISN
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline text-sm" name="nisn" id="NISN" type="number" placeholder="Masukkan NISN Anda" required>
                </div>
                <div class="mb-4">
                    <label class="block font-bold mb-2" for="NIS">
                        NIS
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline text-sm" name="nis" id="NIS" type="number" placeholder="Masukkan NIS Anda" required>
                </div>
                <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline duration-300" type="submit">
                    Sign In
                </button>
                <a class="inline-block align-baseline font-bold text-xs text-blue-500 hover:text-blue-600 duration-300 mt-3" href="./src/views/loginAdmin.php">
                    Login sebagai Administrator / Petugas
                </a>
            </form>
        </div>
    </div>
</body>

</html>