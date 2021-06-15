<?php

include 'config.php';

session_start();
$_SESSION['name'] = '';

        if (isset($_POST['submit'])){
            
            $mail    = $_POST['mail'];
            $pswrd = md5($_POST['pswrd']);
            
    $sql = "SELECT * FROM users WHERE email='$mail' AND password='$pswrd'";
    $result = mysqli_query($conn,$sql);
    if ($result->num_rows > 0){
        
        $row = mysqli_fetch_assoc($result);
        // print_r($row);
        // die;

        $_SESSION['name'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        header("Location: welcome.php");
        
        
        

    }else{
        echo"<script>alert('Email or Password is wrong!!!')</script>";
    }
        }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <title>Login Form</title>
</head>
<body>

<div class="container">

<!-- <button type="button" class="btn btn-success btn-sm" id="register">Register</button> <button type="button" class="btn btn-success btn-sm" id="login">Login</button> -->
    <form action="" id="login-form" method="POST" class="login-email">
    <p class="login-text" style="font-size: 2rem; font: weight 800;">Login</p>
    <div class="input-group">
    <input class="input" type="email" placeholder="Email" name="mail" required>
    </div>

    <div class="input-group">
    <input class="input" type="password" placeholder="Password" name="pswrd" required>
    </div>

    <div class="input-group">
    <button class="btn" name="submit" id="butlogin">Login</button>
    </div>
    <p class="login-register-text">Don't have an account? <a class="register-link" href="register.php">Register here</a></p><br>
    
    <p class="login-register-text"><a class="register-link" href="forget.php">Forget password?</a></p>
    </form>
    </div>

<script>


</script>
    
</body>
</html>