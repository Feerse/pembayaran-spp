<h4 class="font-bold text-xl mb-6">Halaman Data Kelas</h4>
<a href="?url=tambah-kelas" class="py-2 px-3 bg-green-300 hover:bg-green-400 duration-300 mb-3 rounded-md inline-block shadow-md">Tambah Kelas +</a>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Kelas
                </th>
                <th scope="col" class="px-6 py-3">
                    Kompetensi Keahlian
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
            $query = "SELECT * FROM kelas ORDER BY id_kelas DESC";
            $result = mysqli_query($conn, $query);
            foreach ($result as $data) : ?>
                <tr>

                    <td class="px-6 py-4 font-bold">
                        <?= $no++; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data['nama_kelas']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data['kompetensi_keahlian']; ?>
                    </td>
                    <td>
                        <a href="?url=edit-kelas&id_kelas=<?= $data['id_kelas'] ?>" class="inline-block mt-2 font-medium py-2 px-3 m-1 text-gray-900 bg-yellow-300 hover:bg-yellow-400 rounded-md duration-300">Edit</a>
                        <a href="../controllers/hapusKelasController.php?id_kelas=<?= $data['id_kelas'] ?>" class="inline-block mb-2 font-medium py-2 px-3 m-1 text-gray-900 bg-red-300 hover:bg-red-400 rounded-md duration-300" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>