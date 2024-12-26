<?php
include 'config.php';
session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = hash('sha256', $_POST['password']);
    $cpassword = hash('sha256', $_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Query gagal: " . mysqli_error($conn));
        }

        if (mysqli_num_rows($result) == 0) {
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $_POST['username'] = "";
                $_POST['email'] = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email sudah terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password tidak sesuai.')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mahasiswa Register</title>
</head>
<body>
<div class="container">
    <form action="" method="POST" class="login-email">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
        <div class="input-group">
            <input type="text" placeholder="Username" name="username" required>
        </div>
        <div class="input-group">
            <input type="email" placeholder="Email" name="email" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Password" name="password" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="Confirm Password" name="cpassword" required>
        </div>
        <div class="input-group">
            <button type="submit" name="submit" class="btn">Register</button>
        </div>
        <p class="login-register-text">Anda sudah punya akun? <a href="index.php">Login</a></p>
    </form>
</div>
</body>
</html>
