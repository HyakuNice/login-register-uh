<!DOCTYPE html>
<html>
<head>
    <title>Register Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-form">
        <h2>Register</h2>
        <form action="register_proses.php" method="post">
            <input type="text" placeholder="Email" name="email" required>
            <input type="text" placeholder="Username" name="username" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit">Register</button>
            <p>Already have account? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>
</html>