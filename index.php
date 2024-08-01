<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
    <title>Login Form</title>
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <img src="" alt="Logo">
        </div>
        <h1><span>Login</span> your account</h1>
        <h2>Please enter your details</h2>
        <form action="login.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <i class="ri-mail-line input-logo"></i>
            <input type="password" name="password" placeholder="Password" required>
            <i class="ri-lock-2-line input-logo"></i>
            <div class="remember-me">
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit">Login</button>
            <br>
            <a href="#">Forgot password?</a>
        </form>
        <div class="extra-links">
            <a href="#">Sign up</a>
        </div>
        <div class="social">
            <i class="ri-facebook-box-fill" style="color: blue;"></i>
            <i class="ri-instagram-fill" style="color: rgb(218, 12, 12);"></i>
            <i class="ri-twitter-x-fill" style="color: black;"></i>
        </div>
    </div>
</body>
</html>
