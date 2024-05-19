<?php
    include_once 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = $koneksi
    ->query("SELECT * FROM sho where username = '$username' && password = '$password'")
    ->fetch_assoc();

    print_r($user);
    session_start();
    $_SESSION['user_login'] = $user;
    header("Location: dashboard.php");

?>