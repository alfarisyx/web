<?php
 $koneksi = new mysqli("localhost", "root", "", "db");
 if ($koneksi->connect_error) {
    die("Koneksi Gagal : " . $koneksi->connect_error);
    }
?>