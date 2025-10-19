<div class="container-fluid">
    <form action="<?= base_url('tambah_tugas') ?>" method="post">
        <?= csrf_field() ?>
        <div class="form-group">
            <label for="name">Nama Tugas</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="priority">prioritas</label>
            <select name="priority" id="priority" class="form-control">
                <option value="biasa">Biasa</option>
                <option value="cukup">Cukup</option>
                <option value="penting">Penting</option>
            </select>
        </div>
        <div class="form-group">
            <label for="deadline">Deadline</label>
            <input type="date" name="deadline" id="deadline" class="form-control" required min="<?= date('Y-m-d') ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('/') ?>" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>