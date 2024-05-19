<?php
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    include_once 'koneksi.php';

    $insert = $koneksi->query("INSERT INTO sho
    (email, username, password)
    values
    ('$email', '$username', '$password')
    ");

    session_start();
    $_SESSION['user_login'] = $user;
    header("Location: login.php");

    // if ($insert) {
    //     echo "insert data Berhasil";
    // }else{
    //     echo "Gagal Insert Data";
    // }
?>