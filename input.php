<?php
require_once('Database.php');
require_once('Form.php');


// buat instance class Database
$db = new Database('localhost', 'root', '', 'latihan2');

// ambil data dari database
$query = "SELECT * FROM mahasiswa";
$result = $db->query($query);

// buat instance class Form
$form = new Form();


$no = 1;

require_once('header.php')
?>
<html>

<head>
  <title>Modularisasi dengan Class Library</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <div class="form">
        <div class="container">
            <h2>Form Input Data Mahasiswa</h2>
                <form method="post" action="save.php">
                    <?php
                    // menampilkan form input nama
                    echo $form->input('name', 'Nama');

                    // menampilkan form input email
                    echo $form->input('nim', 'NIM');

                    // menampilkan form input email
                    echo $form->input('kelas', 'Kelas');

                    // menampilkan tombol submit
                    echo $form->submit('Simpan');
                    ?>
                </form>
        </div>
    </div>
</body>
</html>

<?php require_once('footer.php') ?>