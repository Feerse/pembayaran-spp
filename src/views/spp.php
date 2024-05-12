<h4 class="font-bold text-xl mb-6">Halaman Data SPP</h4>
<a href="?url=tambah-spp" class="py-2 px-3 bg-green-300 mb-3 rounded-md inline-block shadow-md">Tambah SPP +</a>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                    Action
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
                        <a href="?url=edit-spp&id_spp=<?= $data['id_spp'] ?>" class="font-medium py-2 px-3 mx-1 text-gray-900 bg-yellow-300 hover:underline rounded-md">Edit</a>
                        <a href="../controllers/hapusSppController.php?id_spp=<?= $data['id_spp'] ?>" class="font-medium py-2 px-3 mx-1 text-gray-900 bg-red-300 hover:underline rounded-md" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <!-- <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Apple MacBook Pro 17"
            </th>
            <td class="px-6 py-4">
                Silver
            </td>
            <td class="px-6 py-4">
                Laptop
            </td>

            <td class="px-6 py-4">
                <a href="#" class="font-medium py-2 px-3 mx-1 text-gray-900 bg-yellow-300 hover:underline rounded-md">Edit</a>
                <a href="#" class="font-medium py-2 px-3 mx-1 text-gray-900 bg-red-300 hover:underline rounded-md">Hapus</a>
            </td>
        </tr>
        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Microsoft Surface Pro
            </th>
            <td class="px-6 py-4">
                White
            </td>
            <td class="px-6 py-4">
                Laptop PC
            </td>

            <td class="px-6 py-4">
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
            </td>
        </tr>
        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Magic Mouse 2
            </th>
            <td class="px-6 py-4">
                Black
            </td>
            <td class="px-6 py-4">
                Accessories
            </td>

            <td class="px-6 py-4">
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
            </td>
        </tr>
        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Google Pixel Phone
            </th>
            <td class="px-6 py-4">
                Gray
            </td>
            <td class="px-6 py-4">
                Phone
            </td>

            <td class="px-6 py-4">
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
            </td>
        </tr>
        <tr>
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Apple Watch 5
            </th>
            <td class="px-6 py-4">
                Red
            </td>
            <td class="px-6 py-4">
                Wearables
            </td>

            <td class="px-6 py-4">
                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
            </td>
        </tr> -->
    </table>
</div>