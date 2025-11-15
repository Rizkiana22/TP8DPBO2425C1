<div class="card">
    <div class="card-header bg-primary text-white">
        <h3 class="card-title">Tambah Mata Kuliah</h3>
    </div>
    <div class="card-body">
        <form action="index.php?controller=course&action=create" method="post">
            <div class="mb-3">
                <label for="id" class="form-label">ID Mata Kuliah</label>
                <input type="text" class="form-control" id="id" name="id" required>
            </div>

            <div class="mb-3">
                <label for="course_code" class="form-label">Kode Mata Kuliah</label>
                <input type="text" class="form-control" id="course_code" name="course_code" required>
            </div>

            <div class="mb-3">
                <label for="course_name" class="form-label">Nama Mata Kuliah</label>
                <input type="text" class="form-control" id="course_name" name="course_name" required>
            </div>

            <div class="mb-3">
                <label for="lecturer_id" class="form-label">Id Dosen</label>
                <select class="form-select" id="lecturer_id" name="lecturer_id" required>
                    <option value="">Pilih Dosen</option>
                    <?php foreach ($lecturers as $lecturer): ?>
                        <option value="<?php echo htmlspecialchars($lecturer['id']); ?>">
                            <?php echo htmlspecialchars($lecturer['name']); ?> (<?php echo htmlspecialchars($lecturer['id']); ?>)
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="sks" class="form-label">SKS</label>
                <input type="number" class="form-control" id="sks" name="sks" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>