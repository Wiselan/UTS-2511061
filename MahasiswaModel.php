<?php

class MahasiswaModel {
    private $data = [
        "Daffa Maheswara",
        "Aril saputra",
        "Mohamad Rizky",
        "Andika Pratama",
        "Azril Ramadhan",
        "anisa putri",
    ];

    // Method untuk mengembalikan seluruh data
    public function semua() {
        return $this->data;
    }

    public function cari($i) {
        if (isset($this->data[$i])) {
            return $this->data[$i];
        }
        return "Data tidak ditemukan pada indeks $i";
    }
}