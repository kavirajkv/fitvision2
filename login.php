<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="styles/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="wrapper">
    <form action="logincheck.php" method="POST">
        <h1>Login</h1>
        <!-- Display error message if set -->
        <?php
        session_start();
        if (isset($_SESSION['error'])) {
            echo "<p style='color: red;'>{$_SESSION['error']}</p>";
            unset($_SESSION['error']); // Clear the error message after displaying it
        }
        ?>
        <div class="input-box">
            <input type="text" name="email" placeholder="email" required>
            <i class='bx bxs-user'></i>
        </div>
        <div class="input-box">
            <input type="password" name="password" placeholder="Password" required>
            <i class='bx bxs-lock'></i>
        </div>
        <div class="remember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#" style="color: aquamarine;">Forgot password?</a>
        </div>    
        <button type="submit" class="btn">Login</button>
        <div class="register-link">
            <p>
                Don't have an account? <a href="registration.html">Register</a>
            </p>
        </div>
    </form>
</div>
</body>
</html>
