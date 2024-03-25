<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "db_akademik";
    private $koneksi;

    public function __construct() {
        $this->koneksi = new mysqli($this->host, $this->username, $this->password, $this->database);
        if ($this->koneksi->connect_error) {
            die("Koneksi database gagal: " . $this->koneksi->connect_error);
        }
    }

    public function tampil() {
        $query = "SELECT * FROM mahasiswa";
        $result = $this->koneksi->query($query);
        return $result;
    }

    public function simpan($nama, $alamat, $umur) {
        $query = "INSERT INTO mahasiswa (nama, alamat, umur) VALUES ('$nama', '$alamat', '$umur')";
        return $this->koneksi->query($query);
    }

    public function hapus($id) {
        $query = "DELETE FROM mahasiswa WHERE id='$id'";
        return $this->koneksi->query($query);
    }
}
?>
