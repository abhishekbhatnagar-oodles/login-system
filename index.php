<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="style.css" rel="stylesheet" type="text/css"/>
    
    <title>Login Form</title>
</head>
<body>

<div class="container">
    <form class="login-email">
    <p class="login-text" style="font-size: 2rem; font: weight 800;">Login</p>
    <div class="input-group">
    <input class="input" type="email" placeholder="Email" name="mail" required>
    </div>

    <div class="input-group">
    <input class="input" type="password" placeholder="Password" name="pswrd" required>
    </div>

    <div class="input-group">
    <button class="btn" name="submit">Login</button>
    </div>
    <p class="login-register-text">Don't have an account? <a class="register-link" href="register.php">Register here</a></p>
    </form>
    </div>
    
</body>
</html>