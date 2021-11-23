<?php
require 'koneksi.php';

//cek apakah tombol sudah ditekan atau belum
if (isset($_POST["submit"])) {



    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan !');
                document.location.href = 'tampil.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan !');
            document.location.href = 'tampil.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah data siswa</title>
</head>

<body>
    <h1>Tambah data siswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="id"> ID : </label>
                <input type="text" name="id" id="id" required>
            </li>
            <li>
                <label for="nama"> Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email"> Email : </label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="username"> UserName : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password"> Password : </label>
                <input type="text" name="password" id="password">
            </li>
            <li>
                <label for="ubah"> ubah : </label>
                <input type="text" name="ubah" id="ubah">
            </li>
            <li>
                <label for="hapus"> hapus : </label>
                <input type="text" name="hapus" id="hapus">
            </li>
            <li>
                <button class="btn btn-info" type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>



    </form>

</body>

</html>