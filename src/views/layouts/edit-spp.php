<?php
include '../../inc/conn.php';

$id_spp = $_GET['id_spp'];

$query = "SELECT * FROM spp WHERE id_spp='$id_spp'";
$result = mysqli_query($conn, $query);

$data = mysqli_fetch_array($result);
?>
<a href="?url=spp" class="border p-2 rounded-md inline-block mb-3 shadow-md">
    < Kembali</a>
        <h4 class="font-bold text-xl mb-6 text-center">Edit Data SPP</h4>

        <form class="max-w-md mx-auto" action="../controllers/editSppController.php?id_spp=<?= $id_spp; ?>" method="post">
            <div class="relative z-0 w-full mb-5 group">
                <input value="<?= $data['tahun'] ?>" type="number" name="tahun" id="tahun" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " maxlength="4" required />
                <label for="tahun" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tahun</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input value="<?= $data['nominal'] ?>" type="number" name="nominal" id="nominal" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " maxlength="10" required />
                <label for="nominal" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nominal</label>
            </div>

            <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm w-full sm:w-auto px-4 py-2 text-center duration-300">Simpan</button>
        </form>