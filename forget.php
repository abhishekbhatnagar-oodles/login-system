<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="style.css" rel="stylesheet" type="text/css"/>    
    <title>Send Reset Password Link by passing token value</title>
</head>
<body>

<div class="container">


    <form action="password-reset-token.php"  method="POST" >
    <p class="login-text" style="font-size: 2rem; font: weight 800;">Reset Password</p>
    <br><br>

    <div style="text-align:center" class="input-group">


    <label for="exampleInputEmail1">Enter your email address</label><br>
    <br><br>
    <input class="input" type="email" placeholder="Please enter your email " id="email" name="email" required>
    </div>
    <br><br><br><br><br><br><br>
    

    <div class="input-group">
    <button class="btn" name="submit" >Update Password</button>
    </div>
    

    <button><a style = "text-decoration:none"; href = "index.php">Go Back</a></button><br>
    </form>
    </div>

    
</body>
</html>