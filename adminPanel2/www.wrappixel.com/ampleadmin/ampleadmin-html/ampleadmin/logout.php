<?php
	session_start();
	$Email = $_SESSION['user'];
	$con=mysqli_connect("localhost","root","","bookshare_db");
	$q1 = "update tbl_login set status='Offline' where email = '$Email'";
	$c1 = mysqli_query($con,$q1);
	unset($_SESSION['user']);
?>

<script>

	window.location=("../../../../../Natours/afterS05/home.php");

</script>