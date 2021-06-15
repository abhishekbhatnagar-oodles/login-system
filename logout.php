<?php
session_start();
unset($_SESSION["mail"]);
unset($_SESSION["pswrd"]);
header("Location:index.php");
?>