<?php

include 'config.php';




if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $mail    = $_POST['mail'];
    $pswrd = $_POST['pswrd'];
    $cpswrd =$_POST['cpswrd'];


if (($pswrd === $cpswrd) && !empty($pswrd) && !empty($cpswrd)){

    $sql = "INSERT INTO users (username,email, password)
            VALUES('$name','$mail','$pswrd')";

            $result = mysqli_query($conn, $sql);
// print_r($result);
        if($result){
             echo"<script>alert('User Registered successfully!')</script>";
        }
        else{
            echo"<script>alert('User not Registered successfully!')</script>";
        }

}else{
    // echo "hello world";
    echo"<script>alert('Password does not matched. Please Try again!!!!')</script>";
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
    
    <title>Registration Form</title>
</head>
<body>

<div class="container">
    <form action="" method="POST" class="login-email">
    <p class="login-text" style="font-size: 2rem; font: weight 800;">Register</p>
   
    <div class="input-group">
    <input class="input" type="text" placeholder="username" name="name" required>
    </div>

    <div class="input-group">
    <input class="input" type="email" placeholder="Email" name="mail" required>
    </div>

    <div class="input-group">
    <input class="input" type="password" placeholder="Password" name="pswrd" required>
    </div>

    <div class="input-group">
    <input class="input" type="password" placeholder="Confirm Password" name="cpswrd" required>
    </div>

    <div class="input-group">
    <button class="btn" name="submit" value="submit">Register</button>
    </div>
    <p class="login-register-text">Have an account? <a class="register-link" href="index.php">Login here</a></p>
    </form>
    </div>
    
</body>
</html>