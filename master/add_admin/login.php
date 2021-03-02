<?php
    session_start();
    $message ="";
    
    if(count($_POST)>0){
	$db = mysqli_connect("localhost", "kenxeduc_admin", ".Push12-", "kenxeduc_kenx-edu");
	$mail = mysqli_real_escape_string($db, $_POST['email']);
	$pass = mysqli_real_escape_string($db, $_POST['password']);
	$pass_hashed = hash('sha512', $pass);
	$query = "SELECT * FROM author WHERE email = '$mail' AND password = '$pass_hashed'";
	$result = mysqli_query($db, $query);
	$count = mysqli_num_rows($result);
	if($count == 1){
		$_SESSION['author'] = json_encode(mysqli_fetch_array($result)[1]);
		
	}else{
	    $message ="invalid Username or Password";
 		 //header("Location:http://kenxedu.com/master/login.php");
	}
        if (isset($_SESSION['author'])){
             header("Location:http://kenxedu.com/master/add_admin/index.php");
        }
        
        
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kenxedu_Admin_manager</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images1/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts1/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor1/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor1/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor1/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css1/util.css">
	<link rel="stylesheet" type="text/css" href="css1/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
					<span style="font-size: 32px;">
						<i class="zmdi zmdi-home"></i>
					</span>
				<form class="login100-form validate-form" method="POST" action=""> 
					<span class="login100-form-title p-b-15">
						<img src="images/logo.png" alt="kenxedu">
					</span>
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email" type="email">
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password">
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Login
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor1/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/bootstrap/js/popper.js"></script>
	<script src="vendor1/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/daterangepicker/moment.min.js"></script>
	<script src="vendor1/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor1/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js1/main.js"></script>

</body>
</html>