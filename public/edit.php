<?php
include '../config/database.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = $_GET['id'];

$result = mysqli_query($koneksi, "SELECT * FROM contacts WHERE id = $id");
$contact = mysqli_fetch_assoc($result);

if (!$contact) {
    die("Data tidak ditemukan");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name     = $_POST['name'];
    $phone    = $_POST['phone'];
    $email    = $_POST['email'];
    $category = $_POST['category'];

    mysqli_query($koneksi, "
        UPDATE contacts SET 
            name='$name',
            phone='$phone',
            email='$email',
            category='$category'
        WHERE id=$id
    ");

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Kontak</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-primary mb-4 shadow-sm">
    <div class="container">
        <span class="navbar-brand fw-bold">
            ✏️ Edit Kontak
        </span>
    </div>
</nav>

<div class="container">

    <div class="card shadow-sm">
        <div class="card-body">

            <h5 class="mb-3">Perbarui Data Kontak</h5>

            <form method="POST">

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control"
                           value="<?= $contact['name']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Telepon</label>
                    <input type="text" name="phone" class="form-control"
                           value="<?= $contact['phone']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control"
                           value="<?= $contact['email']; ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <select name="category" class="form-select">
                        <option value="Teman"    <?= $contact['category']=='Teman'?'selected':''; ?>>Teman</option>
                        <option value="Keluarga" <?= $contact['category']=='Keluarga'?'selected':''; ?>>Keluarga</option>
                        <option value="Kerja"    <?= $contact['category']=='Kerja'?'selected':''; ?>>Kerja</option>
                        <option value="Lainnya"  <?= $contact['category']=='Lainnya'?'selected':''; ?>>Lainnya</option>
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="index.php" class="btn btn-secondary">
                        Kembali
                    </a>

                    <button type="submit" class="btn btn-primary">
                        Simpan Perubahan
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
