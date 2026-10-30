<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Daftar Mahasiswa</h4>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($daftar)): ?>
                            <ul class="list-group">
                                <?php foreach ($daftar as $index => $nama): ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span><?= $nama ?></span>
                                        <span class="badge bg-secondary rounded-pill">Indeks: <?= $index ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <div class="alert alert-warning text-center mb-0" role="alert">
                                Data mahasiswa tidak ditemukan atau masih kosong.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>