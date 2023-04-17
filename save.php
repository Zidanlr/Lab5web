<?php
require_once('database.php');

// buat instance class Database
$db = new Database('localhost', 'root', '', 'latihan2');

// ambil data dari form
$name = $_POST['name'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];

// simpan data ke dalam database
$data = array('name' => $name, 'nim' => $nim, 'kelas' => $kelas);
$db->insert('mahasiswa', $data);

// kembali ke halaman utama
header('Location: home');
