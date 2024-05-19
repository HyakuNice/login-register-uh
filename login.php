<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="login-form">
        <h2>Login</h2>
        <form action="login_proses.php" method="post">
            <input type="text" placeholder="username" name = "username" required>
            <input type="password" placeholder="password" name = "password"  required>
            <button type="submit">Login</button>
            <p>Don't have an account? <a href="register.php">Register</a></p>
        </form>
    </div>
</body>
</html>