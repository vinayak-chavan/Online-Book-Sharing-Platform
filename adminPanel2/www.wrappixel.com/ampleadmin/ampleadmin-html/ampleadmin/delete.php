<?php
	$con=mysqli_connect("localhost","root","","bookshare_db");
	$sender=$_REQUEST['sender'];
    $recever=$_REQUEST['receiver'];
    $chat=$_REQUEST['Chatid'];
	$query="DELETE FROM tbl_chat WHERE chatid='$chat'";
	$c0=mysqli_query($con,$query);
	if ($c0)
	{
		?>
		<script>
			alert('Chat Deleted');
			window.location=("resent.php?sender=<?php echo $sender?>&receiver=<?php echo $recever ?>&Chatid=<?php echo $chat?>");
		</script>
		<?php
	}

?>