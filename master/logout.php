<?php
session_start();
unset($_SESSION["name"]);
session_destroy(); 
header("Location:http://kenxedu.com/master/login.php");
?>