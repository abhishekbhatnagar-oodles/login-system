<?php

session_start();


$user_name = $_SESSION["name"];



if(count($_POST)>0) {
    
    if (isset($_POST['submit'])){
        
        $sql = "SELECT * FROM users WHERE username='$user_name'";
        $result = mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result);
        
        if($_SESSION['password'] == $row["password"] && $_POST["newpswrd"] == $_POST["cnewpswrd"] ){
            
            $sql = "UPDATE users SET password = md5($_POST[newpswrd]) WHERE username = '$user_name' ";
            $result = mysqli_query($conn,$sql);
            // print_r($result);die;
           

            $message = "Password Changed Sucessfully";
           
        } else{
             $message = "Password is not correct";
            }
    
    }
        
}


?>