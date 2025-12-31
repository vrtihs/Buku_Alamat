<?php
include '../config/database.php';

$result = mysqli_query($koneksi, "SELECT * FROM contacts ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Buku Alamat</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-primary mb-4 shadow-sm">
    <div class="container py-2">
        <span class="navbar-brand d-flex align-items-center gap-2 fs-3 fw-bold">
            <i class="bi bi-journal-bookmark"></i>
            Buku Alamat
        </span>
    </div>
</nav>

<div class="container">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Daftar Kontak</h4>

       <a href="create.php" class="btn btn-success">
        <i class="bi bi-telephone-plus me-1"></i>
            Tambah Kontak
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">

            <table class="table table-striped table-hover table-bordered align-middle mb-0">
                <thead class="table-primary">
                    <tr>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th>Kategori</th>
                        <th width="160">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                <?php
                $no = 1;

                while($row = mysqli_fetch_assoc($result)): ?>

                    <tr>
                        <td><?= $row['name']; ?></td>
                        <td><?= $row['phone']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['category']; ?></td>

                        <td>
                            <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">
                                Edit
                            </a>

                            <a href="delete.php?id=<?= $row['id']; ?>" 
                               class="btn btn-sm btn-danger"
                               onclick="return confirm('Yakin ingin menghapus?')">
                                Hapus
                            </a>
                        </td>
                    </tr>

                <?php endwhile; ?>

                </tbody>
            </table>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
