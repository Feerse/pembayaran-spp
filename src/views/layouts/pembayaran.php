<h4 class="font-bold text-xl mb-6">Halaman Pilih Data Siswa untuk Pembayaran</h4>

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
                    Kekurangan
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Riwayat
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../../inc/conn.php';
            $no = 1;
            $query = "SELECT * FROM siswa, spp, kelas WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp ORDER BY nama ASC";
            $result = mysqli_query($conn, $query);
            foreach ($result as $data) :
                $data_pembayaran = mysqli_query($conn, "SELECT SUM(jumlah_bayar) as jumlah_bayar FROM pembayaran WHERE nisn='$data[nisn]'");
                $data_pembayaran = mysqli_fetch_array($data_pembayaran);

                $sudah_dibayar = $data_pembayaran['jumlah_bayar'];
                $kekurangan = $data['nominal'] - $data_pembayaran['jumlah_bayar'];
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
                        <?= number_format($sudah_dibayar, 2, ',', '.')  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= number_format($kekurangan, 2, ',', '.')  ?>
                    </td>
                    <td>
                        <?php if ($kekurangan == 0) : ?>
                            <span class="inline-block whitespace-nowrap text-sm bg-green-300 text-gray-900 py-1 px-2 m-2 rounded-lg">Lunas</span>
                        <?php else : ?>
                            <a href="?url=tambah-pembayaran&nisn=<?= $data['nisn'] ?>&kekurangan=<?= $kekurangan ?>" class="inline-block py-2 px-3 m-2 text-gray-900 bg-orange-300 hover:bg-orange-400 rounded-md duration-300 whitespace-nowrap">Bayar</a>
                        <?php endif ?>
                    </td>
                    <td>
                        <a href="?url=riwayat-pembayaran&nisn=<?= $data['nisn'] ?>" class="inline-block py-2 px-3 m-2 text-gray-900 bg-lime-300 hover:bg-lime-400 rounded-md duration-300 whitespace-nowrap">Lihat Riwayat</a>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>