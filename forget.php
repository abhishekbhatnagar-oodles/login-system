<?php



include ('config.php');

include ('forget-api.php');




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="style.css" rel="stylesheet" type="text/css"/>    
    <title>Forget Password Form</title>
</head>
<body>

<div class="container">

<div>   <?php if(isset($message)) { echo $message; } ?>   </div>

    <form action="" id="change-password" method="POST" class="login-email">
    <p class="login-text" style="font-size: 2rem; font: weight 800;">Forget Password</p>

    <div class="input-group">
    <input class="input" type="text" placeholder="Enter your registered Username"  name="name" >
    </div>

    <div class="input-group">
    <input class="input" type="email" placeholder="Enter your regestered Email"  name="mail" >
    </div>

    <div class="input-group">
    <input class="input" type="password" placeholder="Please enter New Password" name="newpswrd" >
    </div>

    <div class="input-group">
    <input class="input" type="password" placeholder="Please confirm New Password" name="cnewpswrd" >
    </div>

    <div class="input-group">
    <button class="btn" name="submit" >Reset Password</button>
    </div>
    
    </form>
    </div>

    
</body>
</html>