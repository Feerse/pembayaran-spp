<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin/Petugas - Aplikasi Pembayaran SPP</title>
    <link rel="stylesheet" href="./css/style.css?ver=1">
</head>

<body class="bg-gray-200 text-gray-700">
    <div class="flex justify-center items-center h-[100vh]">

        <div class="w-full max-w-sm">
            <form action="proses-login-admin.php" method="post" class="bg-white shadow-md rounded-md px-8 pt-6 pb-8 mb-4">
                <h1 class="font-bold text-center mb-4 text-2xl">Login Admin / Petugas</h1>
                <img src="../assets/logo-spp.png" alt="logo-spp" class="mb-5">
                <div class="mb-4">
                    <label class="block font-bold mb-2 capitalize" for="username">
                        username
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline text-sm" name="username" id="username" type="text" placeholder="Masukkan Username Anda" required>
                </div>
                <div class="mb-4">
                    <label class="block font-bold mb-2 capitalize" for="password">
                        password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 mb-3 leading-tight focus:outline-none focus:shadow-outline text-sm" name="password" id="password" type="password" placeholder="Masukkan Password Anda" required>
                </div>
                <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline duration-300" type="submit">
                    Sign In
                </button>
                <a class="inline-block align-baseline font-bold text-xs text-blue-500 hover:text-blue-600 duration-300 ml-3" href="../index.php">
                    Login sebagai Siswa
                </a>
            </form>
        </div>
    </div>
</body>

</html>