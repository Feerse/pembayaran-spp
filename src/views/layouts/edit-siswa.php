<?php
include '../../inc/conn.php';

$nisn = $_GET['nisn'];

$query = "SELECT * FROM siswa, spp, kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp AND nisn='$nisn'";
$result = mysqli_query($conn, $query);

$data = mysqli_fetch_array($result);
?>
<a href="?url=siswa" class="border p-2 rounded-md inline-block mb-3 shadow-md">
    < Kembali</a>
        <h4 class="font-bold text-xl mb-6 text-center">Edit Data Siswa</h4>

        <form class="max-w-md mx-auto" action="../controllers/editSiswaController.php?nisn=<?= $nisn; ?>" method="post">
            <div class="relative z-0 w-full mb-5 group">
                <input value="<?= $data['nisn'] ?>" type="number" name="nisn" id="nisn" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="nisn" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">NISN</label>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input value="<?= $data['nis'] ?>" type="number" name="nis" id="nis" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="nis" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">NIS</label>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input value="<?= $data['nama'] ?>" type="text" name="nama" id="nama" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="nama" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama</label>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <label for="kelas" class="block mb-2 text-sm font-medium text-gray-500">Kelas</label>
                <select name="id_kelas" id="kelas" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>

                    <option value="<?= $data['id_kelas'] ?>"><?= $data['nama_kelas'] ?></option>
                    <?php
                    include "../../inc/conn.php";
                    $kelas = mysqli_query($conn, "SELECT * FROM kelas ORDER BY nama_kelas ASC");
                    foreach ($kelas as $dataKelas) :
                    ?>
                        <option value="<?= $dataKelas['id_kelas'] ?>"><?= $dataKelas['nama_kelas'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-500">Alamat</label>
                <textarea name="alamat" id="alamat" rows="4" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Masukkan alamat siswa" required><?= $data['alamat'] ?></textarea>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input value="<?= $data['no_telp'] ?>" type="number" name="no_telp" id="noTelp" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="noTelp" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus: peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No Telpon</label>
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <label for="spp" class="block mb-2 text-sm font-medium text-gray-500">SPP</label>
                <select name="id_spp" id="spp" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                    <option value="<?= $data['id_spp'] ?>"><?= $data['tahun'] ?> | <?= number_format($data['nominal'], 2, ',', '.'); ?></option>
                    <?php
                    include "../../inc/conn.php";
                    $resultSPP = mysqli_query($conn, "SELECT * FROM spp ORDER BY id_spp ASC");
                    foreach ($resultSPP as $dataSPP) :
                    ?>
                        <option value="<?= $dataSPP['id_spp'] ?>"><?= $dataSPP['tahun'] ?> | <?= number_format($dataSPP['nominal'], 2, ',', '.'); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 font-medium rounded-lg text-sm w-full sm:w-auto px-4 py-2 text-center duration-300">Simpan</button>
        </form>