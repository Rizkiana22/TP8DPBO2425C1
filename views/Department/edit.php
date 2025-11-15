<div class="card">
    <div class="card-header bg-warning text-white">
        <h3 class="card-title">Edit Jurusan</h3>
    </div>
    <div class="card-body">
        <form action="index.php?controller=department&action=edit&id=<?php echo $department['id']; ?>" method="post">
            <div class="mb-3">
                <label for="id" class="form-label">Id Jurusan</label>
                <input type="text" class="form-control" id="id" value="<?php echo htmlspecialchars($department['id']); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Jurusan</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($department['name']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="code" class="form-label">Kode Jurusan</label>
                <input type="text" class="form-control" id="code" name="code" value="<?php echo htmlspecialchars($department['code']); ?>" required>
            </div>
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="index.php?controller=department&action=index" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>