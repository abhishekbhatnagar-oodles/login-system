<?php

include ('config.php');



// $user_name = $_SESSION["name"];



if(count($_POST)>0) {
        
        // $name = $_POST['name'];
        // $mail    = $_POST['mail'];
        // $newpswrd = md5($_POST['newpswrd']);
        // $cnewpswrd = md5($_POST['cnewpswrd']);

    if (isset($_POST['submit'])){

        
        
        $sql = " SELECT * FROM users WHERE username = '$_POST[name]' AND email = '$_POST[mail]' ";
        $result = mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result);
             

    }
     
          if($_POST['name'] == $row['username'] && $_POST['mail'] == $row['email'] && md5($_POST['newpswrd']) == md5($_POST['cnewpswrd']) ){
        
            
     $sql = " UPDATE users SET password = md5($_POST[newpswrd]) WHERE username = '$_POST[name]' AND email = '$_POST[mail]' ";
     $result = mysqli_query($conn,$sql);
    //  print_r($result);
    //         die;
     echo "<script>alert('Password updated successfully')</script>";
            header('Location:index.php');
            
           
        } else{
            //  $message = "Invalid Username or Email";
            echo "Password did not updated";
            }
    
       
}


?>