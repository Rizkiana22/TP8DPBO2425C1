<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>List Mata Kuliah</h2>
    <a href="index.php?controller=course&action=create" class="btn btn-primary">Tambah Mata Kuliah Baru</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Kode Mata Kuliah</th>
            <th>Nama Mata Kuliah</th>
            <th>Jumlah SKS</th>
            <th>Id Dosen</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($courses)): ?>
            <tr>
                <td colspan="5" class="text-center">No courses found</td>
            </tr>
        <?php else: ?>
            <?php foreach ($courses as $course): ?>
                <tr>
                    <td><?php echo htmlspecialchars($course['id']); ?></td>
                    <td><?php echo htmlspecialchars($course['course_code']); ?></td>
                    <td><?php echo htmlspecialchars($course['course_name']); ?></td>
                    <td><?php echo htmlspecialchars($course['sks']); ?></td>
                    <td><?php echo htmlspecialchars($course['lecturer_id']); ?></td>
                    <td>
                        <a href="index.php?controller=course&action=edit&id=<?php echo $course['id']; ?>" class="btn btn-sm btn-success">Edit</a>
                        <a href="index.php?controller=course&action=delete&id=<?php echo $course['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this course?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
</table>