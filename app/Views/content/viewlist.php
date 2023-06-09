    Daftar Kegiatan : <br><br>
    <table class="table-bordered" style="width: 65%">
        <tr align="center">
            <th>
                Nomor Kegiatan
            </th>
            <th>
                Kegiatan
            </th>
            <th>
                Status
            </th>
            <th>
                Aksi
            </th>
        </tr>
        <?php foreach ($list as $t) : ?>
            <tr>
                <td>
                    <?= $t['idkegiatan']; ?>
                </td>
                <td>
                    <?= $t['kegiatan']; ?>
                </td>
                <td>
                    <?= $t['status']; ?>
                </td>
                <td>
                    <a href="/home/edit/<?= $t['idkegiatan']; ?>">selesai</a>
                    <a href="/home/delete/<?= $t['idkegiatan']; ?>">hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>