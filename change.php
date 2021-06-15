<?php



include ('config.php');

include ('change-password.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="style.css" rel="stylesheet" type="text/css"/>    
    <title>Change Password</title>
</head>
<body>

<div class="container">

<div>   <?php if(isset($message)) { echo $message; } ?>   </div>

    <form action="" id="login-form" method="POST" class="login-email">
    <p class="login-text" style="font-size: 2rem; font: weight 800;">Change Password</p>

    <div class="input-group">
    <input class="input" type="password" placeholder="Please enter New Password" name="newpswrd" required>
    </div>

    <div class="input-group">
    <input class="input" type="password" placeholder="Please confirm New Password" name="cnewpswrd" required>
    </div>

    <div class="input-group">
    <button class="btn" name="submit" >Update Password</button>
    </div>
    <button><a style = "text-decoration:none"; href = "logout.php">Logout</a></button><br>

    <button><a style = "text-decoration:none"; href = "welcome.php">Go Back</a></button><br>
    </form>
    </div>

    
</body>
</html>