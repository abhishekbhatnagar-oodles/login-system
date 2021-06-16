<?php




$user_name = $_SESSION["name"];



if(count($_POST)>0) {
    
    if (isset($_POST['submit'])){
        
        $sql = "SELECT * FROM users WHERE username='$user_name'";
        $result = mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($result);
        
        
        if($_SESSION['password'] == $row["password"] && $_POST["newpswrd"] == $_POST["cnewpswrd"] ){
            // print_r($_SESSION);die;

            $newpassword = $_POST['newpswrd'];
            
            
            $sql = "UPDATE users SET password = md5($newpassword) WHERE username = '$user_name' ";
            $result = mysqli_query($conn,$sql);
            
            // print_r($result);die;
            // print_r($result);die;

            $message = "Password changed successfully.";
            
           
        } else{
             $message = "Password is not correct";
            }
    
    }
        
}


?>