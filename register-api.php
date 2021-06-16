<?php

include 'config.php';

function dbquery($pswrd,$name,$mail,$conn){

    $sql = "INSERT INTO users (username,email, password)
            VALUES('$name','$mail','$pswrd')";

            $result = mysqli_query($conn,$sql);
            
            return $result;

}
// if ($_POST){
//     print_r($_POST);
// }


if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $mail    = $_POST['mail'];
    $pswrd = md5($_POST['pswrd']);
    $cpswrd = md5($_POST['cpswrd']);


if (($pswrd === $cpswrd) && !empty($pswrd) && !empty($cpswrd)){
    
   $result = dbquery($pswrd,$name,$mail,$conn) or die( mysqli_error($conn));
//    print_r($result);die;

//    print_r($result);die;
    
    if($result){
        echo"<script>alert('User Registered successfully!')</script>";
        // echo 1;
        header('index.php');
   }
   else{
       echo"<script>alert('User not Registered successfully!')</script>";
        // echo 0;
   }

}else{
    // echo "hello world";
    echo"<script>alert('Password does not matched. Please Try again!!!!')</script>";
}

}
?>