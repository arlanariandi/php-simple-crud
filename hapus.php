<?php
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $db = new Database();
    if ($db->hapus($id)) {
        echo "Data berhasil dihapus";
    } else {
        echo "Gagal menghapus data";
    }
}
