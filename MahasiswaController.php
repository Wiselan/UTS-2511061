<?php

require_once 'MahasiswaModel.php';

class MahasiswaController {

    public function index() {
        $model = new MahasiswaModel();

        $daftar = $model->semua();

        include "views/mahasiswa.php";
    }

public function detail($id) {
    $model = new MahasiswaModel();
    $mahasiswa = $model->cari($id);
    echo "<h3>Detail Mahasiswa:</h3>";
    echo "<p>" . $mahasiswa . "</p>";
    echo "<a href='index.php'>&laquo; Kembali</a>";
}
}