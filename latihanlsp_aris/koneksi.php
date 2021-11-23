<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_lsplatihan";

$conn = mysqli_connect($servername, $username, $password, $database);


function read($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $id = ($data["id"]);
    $nama = ($data["nama"]);
    $email = ($data["email"]);
    $username = ($data["username"]);
    $password = ($data["password"]);

    $query = "INSERT INTO user
                VALUES
              ('$id', '$nama', '$email', '$username', '$password')
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($data)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE id = $data");


    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);


    $query = "UPDATE user SET
            nis = '$nis',
            nama = '$nama',
            email = '$email',
            username = '$username',
            pasword = '$password'
        WHERE id = $id
        ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
