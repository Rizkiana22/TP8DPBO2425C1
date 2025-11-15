<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>List Dosen</h2>
    <a href="index.php?controller=lecturer&action=create" class="btn btn-primary">Tambah Dosen Baru</a>
</div>

<table class = "table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama Dosen</th>
            <th>NIDN</th>
            <th>No Telp</th>
            <th>Tanggal Bergabung</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($lecturers)): ?>
            <tr>
                <td colspan="6" class="text-center">No lecturers found</td>
            </tr>
        <?php else: ?>
            <?php foreach ($lecturers as $lecturer): ?>
                <tr>
                    <td><?php echo htmlspecialchars($lecturer['id']); ?></td>
                    <td><?php echo htmlspecialchars($lecturer['name']); ?></td>
                    <td><?php echo htmlspecialchars($lecturer['nidn']); ?></td>
                    <td><?php echo htmlspecialchars($lecturer['phone']); ?></td>
                    <td><?php echo htmlspecialchars($lecturer['join_date']); ?></td>
                    <td>
                        <a href="index.php?controller=lecturer&action=edit&id=<?php echo $lecturer['id']; ?>" class="btn btn-sm btn-success">Edit</a>
                        <a href="index.php?controller=lecturer&action=delete&id=<?php echo $lecturer['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this lecturer?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>