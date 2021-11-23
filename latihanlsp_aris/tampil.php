<?php
require "koneksi.php";
$db_lsplatihan = read("SELECT * FROM user");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <button><a href="tambah.php">tambah user</a></button>

    <title>Tampilan Data</title>
</head>

<body>
    <h1>Data User</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>nama</th>
            <th>email</th>
            <th>username</th>
            <th>password</th>
            <th>hapus/ubah</th>
        </tr>

        <?php $nomor = 1; ?>
        <?php foreach ($db_lsplatihan as $row) : ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['username'] ?></td>
                <td><?= $row['password'] ?></td>
                <td>
                    <a href="hapus.php?id=<?= $row["id"]; ?>" style="text-decoration:none" onclick="return confirm 
                ('yakin?');">hapus</a>
                    <a href="ubah.php ?id=<?= $row["id"]; ?>" style="text-decoration:none;">ubah</a>
                </td>
            </tr>
            <?php $nomor++ ?>
        <?php endforeach; ?>
    </table>

</body>

</html>