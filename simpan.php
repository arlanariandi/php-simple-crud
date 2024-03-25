<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $umur = $_POST["umur"];

    $db = new Database();
    if ($db->simpan($nama, $alamat, $umur)) {
        echo "Data berhasil disimpan";
    } else {
        echo "Gagal menyimpan data";
    }
}
