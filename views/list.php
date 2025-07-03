<?php if (!empty($todos)): ?>
    <ul class="list-group">
        <?php foreach ($todos as $i => $todo): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center todo-item">
                <form method="post" class="d-flex align-items-center w-100">
                    <input type="hidden" name="toggle" value="<?= $i ?>">
                    <div class="form-check me-auto">
                        <input class="form-check-input" type="checkbox" onchange="this.form.submit()" <?= $todo['done'] ? 'checked' : '' ?>>
                        <label class="form-check-label <?= $todo['done'] ? 'strike' : '' ?>">
                            <?= $todo['task'] ?>
                        </label>
                    </div>
                </form>

                <button class="btn btn-sm btn-outline-secondary me-1" data-bs-toggle="modal" data-bs-target="#editModal<?= $i ?>">Edit</button>

                <form method="post" class="delete-form">
                    <input type="hidden" name="delete" value="<?= $i ?>">
                    <button class="btn btn-sm btn-outline-danger">Hapus</button>
                </form>
            </li>

            <!-- Modal Edit -->
            <div class="modal fade" id="editModal<?= $i ?>" tabindex="-1">
                <div class="modal-dialog">
                    <form method="post" class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Tugas</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <input type="text" name="edit_task" class="form-control" value="<?= $todo['task'] ?>" required>
                            <input type="hidden" name="edit" value="<?= $i ?>">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <div class="alert alert-info">Belum ada tugas.</div>
<?php endif; ?>
