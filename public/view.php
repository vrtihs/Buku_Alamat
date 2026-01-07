<?php
include '../config/database.php';

$id = $_GET['id'];

$result = mysqli_query($koneksi, "SELECT * FROM contacts WHERE id=$id");
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Kontak</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-4">

    <a href="index.php" class="btn btn-secondary mb-3">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>

    <div class="card shadow-sm">
        <div class="card-body">

            <div class="row">
                <div class="col-md-4 text-center">

                    <!-- Foto -->
                    <?php if($data['image']) : ?>
                        <img src="../assets/<?= $data['image']; ?>" 
                             class="img-fluid rounded mb-3"
                             style="max-height: 220px; object-fit: cover;">
                    <?php else: ?>
                        <div class="border rounded bg-light p-5">
                            Tidak ada foto
                        </div>
                    <?php endif; ?>

                </div>

                <div class="col-md-8">

                    <h4 class="fw-bold mb-3"><?= $data['name']; ?></h4>

                    <p><strong>📞 Telepon:</strong> <?= $data['phone']; ?></p>
                    <p><strong>📧 Email:</strong> <?= $data['email']; ?></p>
                    <p><strong>🏷️ Kategori:</strong> <?= $data['category']; ?></p>

                    <hr>

                    <h6>Catatan</h6>
                    <p><?= $data['note'] ?: '— tidak ada catatan —'; ?></p>

                    <hr>

                    <!-- Tombol WhatsApp -->
                    <a target="_blank"
                       class="btn btn-success"
                       href="https://wa.me/62<?= ltrim($data['phone'], '0'); ?>">
                        Chat via WhatsApp
                    </a>

                    <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-warning">
                        Edit
                    </a>
                </div>
            </div>

        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
