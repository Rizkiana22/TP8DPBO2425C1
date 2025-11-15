<div class = "card">
    <div class= "card-header bg-warning text-white">
        <h3 class="card-title">Edit Dosen</h3>
    </div>
    <div class="card-body">
        <form action="index.php?controller=lecturer&action=edit&id=<?php echo $lecturer['id']; ?>" method="post">
            <div class="mb-3">
                <label for="id" class="form-label">Id Dosen</label>
                <input type="text" class="form-control" id="id" value="<?php echo htmlspecialchars($lecturer['id']); ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Dosen</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($lecturer['name']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="nidn" class="form-label">NIDN</label>
                <input type="text" class="form-control" id="nidn" name="nidn" value="<?php echo htmlspecialchars($lecturer['nidn']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">No Telp</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($lecturer['phone']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="join_date" class="form-label">Tanggal Bergabung</label>
                <input type="date" class="form-control" id="join_date" name="join_date" value="<?php echo htmlspecialchars($lecturer['join_date']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="department_id" class="form-label">Jurusan</label>
                <select class="form-select" id="department_id" name="department_id" required>
                    <?php foreach ($departments as $department): ?>
                        <option value="<?php echo $department['id']; ?>" <?php echo ($department['id'] == $lecturer['department_id']) ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($department['name']); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
           <div class="d-flex gap-2">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="index.php?controller=lecturer&action=index" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>