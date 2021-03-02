<?php
session_start();
	$db = mysqli_connect("localhost", "kenxeduc_admin", ".Push12-", "kenxeduc_kenx-edu");
	$mail = mysqli_real_escape_string($db, $_POST['email']);
	$pass = mysqli_real_escape_string($db, $_POST['password']);
	$pass_hashed = hash('sha512', $pass);
	$query = "SELECT * FROM author WHERE email = '$mail' AND password = '$pass_hashed'";
	$result = mysqli_query($db, $query);
	$count = mysqli_num_rows($result);
	if($count == 1){
		$_SESSION['author'] = json_encode(mysqli_fetch_array($result)[1]);
		 header("Location:http://kenxedu.com/master/add_admin/index.php");
	}else{
		  header("Location:http://kenxedu.com/master/add_admin/login.php");
	}
?>