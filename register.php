<?php
include 'config.php';

include 'register-api.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    
    
    <title>Registration Form</title>
</head>
<body>

<!-- <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<div class="alert alert-danger alert-dismissible" id="error" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div> -->

<div class="container">
    <form action="" id="register-form" method="POST" class="login-email">
    <p class="login-text" style="font-size: 2rem; font: weight 800;">Register</p>
   
    <div class="input-group">
    <input class="input" type="text" placeholder="username" id="name" name="name" required>
    </div>

    <div class="input-group">
    <input class="input" type="email" placeholder="Email" id="email" name="mail" required>
    </div>

    <div class="input-group">
    <input class="input" type="password" placeholder="Password" id="password" name="pswrd" required>
    </div>

    <div class="input-group">
    <input class="input" type="password" placeholder="Confirm Password" id="cpassword" name="cpswrd" required>
    </div>

    <div class="input-group">
    <input type="submit" value="submit" id="submit" name="submit" >
    </div>
    <p class="login-register-text">Have an account? <a class="register-link" href="index.php">Login here</a></p>
    </form>

<div id="response"></div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

<!-- <script> 

$(document).ready(function(){
  $("#submit").click(function(e){
    e.preventDefault();
    var name = $("#name").val();
    var mail = $("#email").val();
    var password = $("#password").val();
    var response = $("#response").val();
    

    $.post("./register-api.php",{

      name:name,
      mail:email,
      password: password
    
    }  ,
      function(data,status){
        if(data=="success"){
          // $(#response).html("<div class='alert alert-info'>"+data+"<./div>")
          console.log('success');
        }else{
          // $(#Response).html("<div class='alert alert-warning'>"+data+"<./div>")
          console.log('failed');
        }

      }   

    );
  });
}); -->



<!-- $(document).ready(function() {
 $('#register-form').on('submit', function(e) {
      e.preventDefault();
         
       		var email = $('#email').val();
          var name = $('#name').val();
 	      	var password = $('#password').val();
          var submit =$('#submit').val();

         if(name!="" && email!="" && phone!="" && password!="" ){
 			$.ajax({
 				url: "register.php",
 				type: "POST",
 				data: {
 					name: name,
 					email: email,
 					password: password,	
           submit:	submit				
                 }

             });
         }
        else{
	  	alert('Please fill all the field !');
		 }

// });
// });

// $('#butsave').on('click', function() {
           
		
//     }); -->

</script>

</body>
</html>