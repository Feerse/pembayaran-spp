<h4 class="font-bold text-xl mb-6">Halaman Data SPP</h4>
<a href="?url=./layouts/tambah-spp" class="py-2 px-3 bg-green-300 hover:bg-green-400 duration-300 mb-3 rounded-md inline-block shadow-md">Tambah SPP +</a>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Tahun
                </th>
                <th scope="col" class="px-6 py-3">
                    Nominal
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
            $query = "SELECT * FROM spp ORDER BY id_spp DESC";
            $result = mysqli_query($conn, $query);
            foreach ($result as $data) : ?>
                <tr>

                    <td class="px-6 py-4">
                        <?= $no++; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data['tahun']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data['nominal']; ?>
                    </td>
                    <td>
                        <a href="?url=./layouts/edit-spp&id_spp=<?= $data['id_spp'] ?>" class="inline-block mt-2 font-medium py-2 px-3 mx-1 text-gray-900 bg-yellow-300 hover:bg-yellow-400 rounded-md duration-300">Edit</a>
                        <a href="../controllers/hapusSppController.php?id_spp=<?= $data['id_spp'] ?>" class="inline-block mb-2 font-medium py-2 px-3 mx-1 text-gray-900 bg-red-300 hover:bg-red-400 rounded-md duration-300" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>