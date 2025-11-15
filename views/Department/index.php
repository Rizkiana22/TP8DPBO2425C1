<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>List Jurusan</h2>
    <a href="index.php?controller=department&action=create" class="btn btn-primary">Tambah Jurusan Baru</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama Jurusan</th>
            <th>Kode Jurusan</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if (empty($departments)): ?>
            <tr>
                <td colspan="4" class="text-center">No departments found</td>
            </tr>
        <?php else: ?>
            <?php foreach ($departments as $department): ?>
                <tr>
                    <td><?php echo htmlspecialchars($department['id']); ?></td>
                    <td><?php echo htmlspecialchars($department['name']); ?></td>
                    <td><?php echo htmlspecialchars($department['code']); ?></td>
                    <td>
                        <a href="index.php?controller=department&action=edit&id=<?php echo $department['id']; ?>" class="btn btn-sm btn-success">Edit</a>
                        <a href="index.php?controller=department&action=delete&id=<?php echo $department['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this department?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
