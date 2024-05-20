<?php
include '../../inc/conn.php';

$nisn = $_GET['nisn'];
$kekurangan = $_GET['kekurangan'];

$query = "SELECT * FROM siswa, spp, kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp AND nisn='$nisn'";
$result = mysqli_query($conn, $query);

$data = mysqli_fetch_array($result);
?>
<a href="?url=pembayaran" class="border p-2 rounded-md inline-block mb-3 shadow-md">
    < Kembali</a>
        <h4 class="font-bold text-xl mb-6 text-center">Pembayaran SPP</h4>

        <form class="max-w-md mx-auto" action="../controllers/PembayaranController.php?action=add&nisn=<?= $nisn ?>" method="post">
            <input value="<?= $data['id_spp'] ?>" name="id_spp" type="hidden" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer cursor-not-allowed" placeholder=" " required />

            <div class="relative z-0 w-full mb-5 group">
                <input value="<?= $_SESSION['nama_petugas'] ?>" type="text" id="nama_petugas" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer cursor-not-allowed" placeholder=" " disabled required />
                <label for="nama_petugas" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Petugas</label>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input value="<?= $data['nisn'] ?>" name="nisn" type="number" id="nisn" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 peer cursor-not-allowed" placeholder=" " readonly required />
                <label for="nisn" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">NISN</label>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input value="<?= $data['nama'] ?>" type="text" id="nama" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer cursor-not-allowed" placeholder=" " disabled required />
                <label for="nama" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama Siswa</label>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input type="date" name="tgl_bayar" id="tgl_bayar" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="tgl_bayar" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal Bayar</label>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input name="jumlah_bayar" type="number" id="jumlah_bayar" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" max="<?= $kekurangan ?>" placeholder=" " required />
                <label for="jumlah_bayar" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jumlah Bayar (Jumlah yang belum dibayar adalah Rp.<b><?= number_format($kekurangan, 2, ',', '.') ?></b>)</label>
            </div>

            <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm w-full sm:w-auto px-4 py-2 text-center duration-300">Simpan</button>
        </form>