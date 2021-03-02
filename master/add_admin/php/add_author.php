<?php

      session_start();
      if(!isset($_SESSION['author'])){
      header("Location:http://kenxedu.com/login.php");
     }



session_start();

	$db = mysqli_connect("localhost", "kenxeduc_admin", ".Push12-", "kenxeduc_kenx-edu");
	$email =$_POST['mail'];
	$name =$_POST['name'];
	$pass =$_POST['password'];
	$pass = hash('sha512', $pass);
	$query = "INSERT INTO author (name, email, password) VALUES ('$name','$email','$pass')";
	$result = mysqli_query($db, $query);


	header("Location:http://kenxedu.com/master/login.php ");

?>