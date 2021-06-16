<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include ('config.php');

if(isset($_POST['submit']) && $_POST['email']){

    $emailid = $_POST['email'];
    
    $sql ="SELECT * FROM users WHERE email= '$_POST[email]'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    
    // if (!$result) {
    //     printf("Error: %s\n", mysqli_error($conn));
    //     exit();
    // }die;
    if($row){
        // print_r($emailid);die;
        
        $token = md5($emailid).rand(10,100);

        $update = mysqli_query($conn,"UPDATE users SET reset_link_token = '$token' WHERE email= '$emailid'");

        $link = "<a href='http://localhost/login_system/reset-password.php?key=".$emailid."&token=".$token."'>Click To Reset password</a>";
        
        require_once "vendor/autoload.php";
        
        $mail = new PHPMailer();
 
        $mail->CharSet =  "utf-8";
        $mail->IsSMTP();
        
        $mail->SMTPAuth = true;                  
        
        $mail->Username = "abhishek.bhatnagar@oodles.io";
        
        $mail->Password = "123@abc1999";
        $mail->SMTPSecure = "ssl";  
        
        $mail->Host = "smtp.gmail.com";
        
        $mail->Port = "465";
        $mail->From='abhishek.bhatnagar@oodles.io';
        $mail->FromName='Abhishek Bhatnagar';
        $mail->AddAddress('abhishek.bhatnagar@oodles.io', 'Abhishek Bhatnagar');
        $mail->Subject  =  'Reset Password';
        $mail->IsHTML(true);
        $mail->Body    = 'Click On This Link to Reset Password '.$link.'';
        if($mail->Send())
        {
          echo "Check Your Email and Click on the link sent to your email";
        }
        else
        {
          echo "Mail Error - >".$mail->ErrorInfo;
        }
                


    }else{
        echo "Mail Error";
    }





}else{
    echo "Something went wrong";
}

    
    
   
?>