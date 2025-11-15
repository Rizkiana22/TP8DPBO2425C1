<div class="card">
    <div class="card-header bg-primary text-white">
        <h3 class="card-title">Tambah Jurusan</h3>
    </div>
    <div class="card-body">
        <form action="index.php?controller=department&action=create" method="post">
            <div class="mb-3">
                <label for="id" class="form-label">Id Jurusan</label>
                <input type="text" class="form-control" id="id" name="id" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Jurusan</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for ="code" class="form-label">Kode Jurusan</label>
                <input type="text" class="form-control" id="code" name="code" required>
            </div>
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-success">Submit</button>
                <a href="index.php?controller=department&action=index" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>