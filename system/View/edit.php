<div class="container-fluid">
    <form action="<?+ base_url('update_tugas/' . $tugas['task_id']) ?>" method="post">
        <?= csrf_field() ?>
        <input type="hidden" name="task_id" value="<?= $tugas['task_id'] ?>">

        <div class="form-group">
            <label for="task_name">Nama Tugas</label>
            <input type="text" class="form-control" id="task_name" name="task_name" value="<?= esc($tugas['task_name']) ?>" required>
        </div>

        <div class="form-group">
            <label for="priority">Priority</label>
            <select class="form-control" id="priority" name="priority">
                <option value="biasa" <?= ($tugas['priority'] == 'biasa') ? 'selected' : ''?>>Biasa</option>
                <option value="cukup" <?= ($tugas['priority'] == 'cukup') ? 'selected' : ''?>>Cukup</option>
                <option value="penting" <? ($tugas['priority'] == 'penting') ? 'selected' : ''?>>Penting</option>
            </select>
        </div>

        <div class="form-group">
            <label for="deadline">Deadline</label>
            <input type="date" class="form-control" id="deadline" name="deadline" value="<?= esc($tugas['deadline']) ?>" required>
        </div>

        <div class="form-group text-right">
            <a href="<?= base_url('/') ?>" class="btn btn-secondry">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form>
</div>