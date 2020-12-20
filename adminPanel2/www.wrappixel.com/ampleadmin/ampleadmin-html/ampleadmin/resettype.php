<?php
		$con=mysqli_connect("localhost","root","","bookshare_db");
		session_start();
		$sender=$_REQUEST['sender'];
  	$recever=$_REQUEST['receiver'];
  	$chat=$_REQUEST['Chatid'];
		$name=$_SESSION['user'];
		$query1="UPDATE tbl_login SET istype='' where email='$name'";
    $c01=mysqli_query($con,$query1);
    ?>
    <script>
    window.location=("resent.php?sender=<?php echo $sender?>&receiver=<?php echo $recever ?>&Chatid=<?php echo $chat?>");
    </script>
    <?php
?>