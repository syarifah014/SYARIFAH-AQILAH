<?php if(session()->getFlashdata('error')) : ?>
    <!-- Menampilkan pesan error jika ada -->
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('error') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
    </div>
<?php endif; ?>

<!-- Tombol untuk menambah tugas baru -->
<a href="<?= base_url('tambah')?>" class="btn btn-danger">
    <i class="fas fa-plus"> Tambah Tugas</i>
</a>

<!-- Tabel untuk menampilkan daftar tugas -->
<table class="table table-bordered text-center">
    <thead class="thead-light">
        <tr>
            <th>No</th>
            <th>Nama Tugas</th>
            <th>Status</th>
            <th>Prioritas</th>
            <th>Dibuat pada</th>
            <th>Deadline</th>
            <th colspan="3">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1 ?> <!-- Inisialisasi nomor urut -->
        <?php foreach ($tugas as $t) : ?> <!-- Looping untuk setiap tugas -->
            <tr>
                <td><?= $no++ ?></td> <!-- Menampilkan nomor urut -->
                <td class="text-left"><?= esc($t['task_name'])?></td> <!-- Menampilkan nama tugas dengan sanitasi -->
                <td>
                    <!-- Menampilkan status tugas dengan badge -->
                    <span class="badge badge-<?= ($t['status'] == 'belum') ? 'danger' : 'success' ?>">
                        <?= ucfirst($t['status']) ?>
                    </span>
                </td>
                <td>
                    <!-- Menampilkan prioritas tugas dengan badge -->
                    <span class="badge badge-<?= ($t['priority'] == 'biasa') ? 'success' : ($t['priority'] == 'cukup' ? 'warning' : 'danger') ?> ">
                        <?= ucfirst($t['priority']) ?>
                    </span>
                </td>
                <td><?= date('d-m-Y', strtotime($t['created_at'])) ?></td> <!-- Menampilkan tanggal dibuat -->
                <td><?= date('d-m-Y', strtotime ($t['deadline'])) ?></td> <!-- Menampilkan deadline tugas -->
                <td>
                    <!-- Tombol untuk memperbarui status tugas -->
                    <a href="<?= base_url('update_status/' . $t['task_id']) ?>" class="btn btn-<?= ($t['status'] == 'belum') ? 'danger' : 'success disabled' ?>">
                        <i class="fas fa-<?= ($t['status'] == 'belum')? '' : 'check' ?>"><?= ($t['status'] == 'belum') ? 'menunggu' : '' ?></i>
                    </a>
                </td>
                <td>
                    <!-- Tombol untuk mengedit tugas -->
                    <a href="<?= base_url('edit/' . $t['task_id']) ?>" class="btn btn-<?= ($t['status'] == 'belum') ? 'info' : 'secondary disable'?>">
                        <i class="fas fa-edit"> Rubah</i>
                    </a>
                </td>
                <td>
                <?php if($t['status'] == 'belum') : ?>
                    <!-- Tombol untuk menghapus tugas hanya jika statusnya 'belum' -->
                    <a href="<?= base_url('hapus/' . $t['task_id']) ?>" class="btn btn-danger"
                    onclick="return confirm('Yakin Ingin Menghapus Tugas Ini?');">
                        <i class="fas fa-trash">Hapus</i>
                    </a>
                <?php else: ?>
                    <!-- Tombol hapus dinonaktifkan jika statusnya bukan 'belum' -->
                    <button class="btn btn-secondary disabled" disabled>
                        <i class="fas fa-trash">Hapus</i>
                    </button>
                <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>