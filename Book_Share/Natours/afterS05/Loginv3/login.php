<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "bookshare_db");
	if(isset($_POST['submit']))
	{
		$Email = $_POST['email'];
		$ps = $_POST['pass'];

		$q = "select * from tbl_login where email = '$Email' AND password = '$ps'";
		$c = mysqli_query($conn,$q);
		$r = mysqli_num_rows($c);

		if($r>=1)
		{
			$q1 = "update tbl_login set status='Online' where email = '$Email'";
			$c1 = mysqli_query($conn,$q1);
			$_SESSION['user']=$Email;
			?>
			<script>
				alert("Login successfully");
				window.location=("../../../adminPanel2/www.wrappixel.com/ampleadmin/ampleadmin-html/ampleadmin/index.php?name=$Email");
			</script>
			<?php
			}
			else
			{
				
				?>
				<script>
					alert("Login Unsuccessfully");
				</script>
				<?php
			}
			
		}

?>














<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100" style="background:  linear-gradient(to right bottom, #7ed56f 0%, #28b485 100%);">
				<form class="login100-form validate-form" method="POST" action="#">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate="Enter Email">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<!-- <div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div> -->

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Login
						</button>
					</div>

					<div class="text-center p-t-90" >
						<a class="txt1" href="../register/register.php" style="margin-bottom: 30px;">
							Don't have an account? Register Now.
						</a> <br><br>
						<a class="txt1" href="#" style="margin-top: 50px">
							Forgot Password?
						</a>
					</div>
					<br>
				</form>
				<div class="container-login100-form-btn">
				<a href="../home.php"><img src="arrow.png" style="width: 50px;height: 50px" hint="Go to home page"></a>
			</div>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>