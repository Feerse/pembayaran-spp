<?php
include '../../inc/conn.php';

$id_petugas = $_GET['id_petugas'];

$query = "SELECT * FROM petugas WHERE id_petugas='$id_petugas'";
$result = mysqli_query($conn, $query);

$data = mysqli_fetch_array($result);
?>
<a href="?url=petugas" class="border p-2 rounded-md inline-block mb-3 shadow-md">
    < Kembali</a>
        <h4 class="font-bold text-xl mb-6 text-center">Edit Data Petugas</h4>

        <form class="max-w-md mx-auto" action="../controllers/PetugasController.php?action=edit&id_petugas=<?= $id_petugas; ?>" method="post">
            <div class="relative z-0 w-full mb-5 group">
                <input value="<?= $data['username'] ?>" type="text" name="username" id="username" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="username" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Username</label>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input value="<?= $data['password'] ?>" type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="password" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Password</label>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input value="<?= $data['nama_petugas'] ?>" type="text" name="nama_petugas" id="nama_petugas" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="nama_petugas" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Petugas</label>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <label for="level" class="block mb-2 text-sm font-medium text-gray-500">Level</label>
                <select name="level" id="level" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>

                    <option value="<?= $data['level'] ?>"><?= $data['level'] ?></option>
                    <option value="admin">admin</option>
                    <option value="petugas">petugas</option>
                </select>
            </div>

            <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm w-full sm:w-auto px-4 py-2 text-center duration-300">Simpan</button>
        </form>