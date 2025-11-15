<div class = "card">
    <div class= "card-header bg-warning text-white">
        <h3 class="card-title">Edit Course</h3>
    </div>
    <div class="card-body">
        <form action="index.php?controller=course&action=edit&id=<?php echo $course['id']; ?>" method="post">
            <div class="mb-3">
                <label for="id" class="form-label">Id Mata Kuliah</label>
                <input type="text" class="form-control" id="id" value="<?php echo htmlspecialchars($course['id']); ?>" readonly>
            </div>
            
            <div class="mb-3">
                <label for="course_code" class="form-label"></label>
                <input type="text" class="form-control" id="course_code" name="course_code" value="<?php echo htmlspecialchars($course['course_code']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="course_name" class="form-label">Nama Mata Kuliah</label>
                <input type="text" class="form-control" id="course_name" name="course_name" value="<?php echo htmlspecialchars($course['course_name']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="sks" class="form-label">Jumlah SKS</label>
                <input type="number" class="form-control" id="sks" name="sks" value="<?php echo htmlspecialchars($course['sks']); ?>" required>
            </div>

            <div class="mb-3">
                <label for="lecturer_id" class="form-label">Dosen Pengampu</label>
                <select class="form-select" id="lecturer_id" name="lecturer_id" required>
                    <?php foreach ($lecturers as $lecturer): ?>
                        <option value="<?php echo $lecturer['id']; ?>" <?php echo ($lecturer['id'] == $course['lecturer_id']) ? 'selected' : ''; ?>>
                            <?php echo htmlspecialchars($lecturer['name']); ?>
                        </option>
                    <?php endforeach; ?>    
                </select>
            </div>
            
           <div class="d-flex gap-2">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="index.php?controller=course&action=index" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>