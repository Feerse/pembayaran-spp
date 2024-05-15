<h4 class="font-bold text-xl mb-6">Halaman Data Siswa</h4>
<a href="?url=./layouts/tambah-siswa" class="py-2 px-3 bg-green-300 hover:bg-green-400 duration-300 mb-3 rounded-md inline-block shadow-md">Tambah Siswa +</a>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    NISN
                </th>
                <th scope="col" class="px-6 py-3">
                    NIS
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Kelas
                </th>
                <th scope="col" class="px-6 py-3">
                    Alamat
                </th>
                <th scope="col" class="px-6 py-3">
                    No Telpon
                </th>
                <th scope="col" class="px-6 py-3">
                    SPP
                </th>
                <th scope="col" class="px-6 py-3">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../../inc/conn.php';
            $no = 1;
            $query = "SELECT * FROM siswa, spp, kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp ORDER BY nama ASC";
            $result = mysqli_query($conn, $query);
            foreach ($result as $data) : ?>
                <tr>

                    <td class="px-6 py-4">
                        <?= $no++; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data['nisn']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data['nis']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data['nama']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data['nama_kelas']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data['alamat']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data['no_telp']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data['tahun']; ?> - <?= number_format($data['nominal'], 2, ',', '.'); ?>
                    </td>
                    <td>
                        <a href="?url=./layouts/edit-siswa&nisn=<?= $data['nisn'] ?>" class="inline-block mt-2 font-medium py-2 px-3 mx-1 text-gray-900 bg-yellow-300 hover:bg-yellow-400 rounded-md duration-300">Edit</a>
                        <a href="../controllers/hapusSiswaController.php?nisn=<?= $data['nisn'] ?>" class="inline-block mb-2 font-medium py-2 px-3 mx-1 text-gray-900 bg-red-300 hover:bg-red-400 rounded-md duration-300" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>