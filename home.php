<?php
require_once('Database.php');
require_once('Form.php');


// buat instance class Database
$db = new Database('localhost', 'root', '', 'latihan2');

// ambil data dari database
$query = "SELECT * FROM mahasiswa";
$result = $db->query($query);


$no = 1;

require_once('header.php')
?>

<!DOCTYPE html>
<html>

<head>
    <title>Modularisasi dengan Class Library</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Modularisasi dengan Class Library</h2>
        <br>
        <br>
        <h2>Data Mahasiswa</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // menampilkan data dari database ke dalam tabel
                foreach ($result as $row) {
                    echo "<tr>
                            <td>{$no}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['nim']}</td>
                            <td>{$row['kelas']}</td>
                        </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<?php
// menutup koneksi database
$db->close();

require_once('footer.php')
?>