<h4 class="font-bold text-xl mb-6">Halaman Laporan Pembayaran</h4>
<a href="../controllers/cetakLaporanController.php" class="inline-block py-2 px-3 m-2 text-gray-900 bg-amber-300 hover:bg-amber-400 rounded-md duration-300 whitespace-nowrap">Cetak Laporan</a>
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
                    Kelas
                </th>
                <th scope="col" class="px-6 py-3">
                    Tahun SPP
                </th>
                <th scope="col" class="px-6 py-3">
                    Nominal
                </th>
                <th scope="col" class="px-6 py-3">
                    Sudah Dibayar
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal Bayar
                </th>
                <th scope="col" class="px-6 py-3">
                    Petugas
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../../inc/conn.php';
            $no = 1;
            $query = "SELECT * FROM pembayaran, siswa, kelas, spp, petugas WHERE pembayaran.nisn=siswa.nisn AND siswa.id_kelas=kelas.id_kelas AND pembayaran.id_spp=spp.id_spp AND pembayaran.id_petugas=petugas.id_petugas ORDER BY tgl_bayar DESC";
            $result = mysqli_query($conn, $query);
            foreach ($result as $data) :
            ?>
                <tr>
                    <td class="px-6 py-4 font-bold">
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
                        <?= $data['tahun']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= number_format($data['nominal'], 2, ',', '.')  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= number_format($data['jumlah_bayar'], 2, ',', '.')  ?>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <?= $data['tgl_bayar']; ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $data['nama_petugas']; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>