<?php
	session_start();
	if (!isset($_SESSION['user'])) {
		?>
			<script>
				alert("You have to login first");
				window.location=("../../../../../Natours/afterS05/Loginv3/login.php");
			</script>
		<?php
	}
?>