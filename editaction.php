<?php
include("dbconnect.php");

$user = $_POST['username'];
$email = $_POST['email'];
$nama = $_POST['nama'];
$id = $_POST['userid'];
$password = $_POST['password'];

if ($password == "") {
    $query = "UPDATE users SET username='$user', email='$email', nama='$nama' WHERE id=$id";
} else {
    $paswd = md5(sha1($password));
    $query = "UPDATE users SET username='$user', email='$email', nama='$nama', paswd='$paswd' WHERE id=$id";
}

$k->query($query);
header('Location: main.php');
?>
