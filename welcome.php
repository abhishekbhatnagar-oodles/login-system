<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
<div style ="margin-top:250px";>
<center><?php echo "<center><h1> Welcome" . ' '.  $_SESSION['name'] . "</h1></center>"; ?>

<a href="logout.php">Logout</a><br>
<a href="change.php">change password?</a>
</center>
</div>
</body>
</html>