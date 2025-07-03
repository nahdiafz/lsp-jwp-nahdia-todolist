<!-- Statistik -->
<div class="row text-center mb-4">
    <div class="col-md-4">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="text-muted">Total</h6>
                <h3 class="fw-bold text-primary"><?= $total ?></h3>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="text-muted">Selesai ✅</h6>
                <h3 class="fw-bold text-success"><?= $done ?></h3>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="text-muted">Belum ⏳</h6>
                <h3 class="fw-bold text-warning"><?= $undone ?></h3>
            </div>
        </div>
    </div>
</div>

<!-- Progress -->
<div class="mb-4">
    <label class="form-label fw-semibold">Progress</label>
    <div class="progress" style="height: 1rem;">
        <div class="progress-bar bg-success" role="progressbar" style="width: <?= $progress ?>%;">
            <?= $progress ?>%
        </div>
    </div>
</div>

<!-- Form Tambah -->
<form method="post" class="mb-4">
    <div class="input-group">
        <input type="text" name="task" class="form-control" placeholder="Tugas baru..." required>
        <button class="btn btn-success" name="add">Tambah</button>
    </div>
</form>
