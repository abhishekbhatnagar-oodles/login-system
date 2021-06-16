<?php

include 'config.php';

// if($_GET['key'] && $_GET['token'])
// {
    
//     $email = $_GET['key'];
//     $token = $_GET['token'];
    
    
//     // print_r($token);die;
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="style.css" rel="stylesheet" type="text/css"/>    
    <title>Reset Password</title>
</head>
<body>

<div class="container">


<form action="" id="login-form" method="POST" class="login-email">
    <p class="login-text" style="font-size: 2rem; font: weight 800;">Reset Password</p>

    <div class="input-group">
    <input class="input" type="password" placeholder="Please enter New Password" name="password" required>
    </div>

    <div class="input-group">
    <input class="input" type="password" placeholder="Please confirm New Password" name="cpassword" required>
    </div>

    <div class="input-group">
    <button class="btn" name="submit" >Reset Password</button>
    </div>

    <button><a style = "text-decoration:none"; href = "index.php">Go to Homepage</a></button><br>
    </form>
    </div>
<?php


// print_r($token);die;

if(isset($_POST['submit']) && $_POST["password"] == $_POST["cpassword"])
{
    // echo "Chal gaya bhaiya";
    $newpassword = $_POST['password'];
    $email = $_GET['key'];
    $token = $_GET['token'];
// print_r($token);die;
// print_r($_POST);die;
// print_r($_POST['password']);die;


$sql = "UPDATE users SET password = md5('$newpassword') WHERE reset_link_token = '$token' ";
            $result = mysqli_query($conn,$sql) or die( mysqli_error($conn));
            // $row = mysqli_fetch_array($result);die;

            if(empty($result)){
                
                echo "<script>alert('Password reser FAILED!!!')</script>";
            }else{
                echo "<script>alert('Password changed successfully.Please Login again')</script>";
                header('Location:index.php');
            }
            // mysqli_error($conn);
                        // print_r($result);die;


}

?>

</body>
</html>