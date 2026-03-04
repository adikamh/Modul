<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'haikal' && $password == '123') {
    $_SESSION['username'] = $username;
    header('Location: ../index.php');
} else {
    echo "Login gagal. Username atau password salah.";
}

?>