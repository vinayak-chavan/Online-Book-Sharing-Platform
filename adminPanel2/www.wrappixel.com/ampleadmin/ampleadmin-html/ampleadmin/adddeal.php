<?php
	$Book=$_REQUEST['book'];
	$Sender=$_REQUEST['sender'];
	$Receiver=$_REQUEST['receiver'];
	$con=mysqli_connect("localhost","root","","bookshare_db");
	$q5="select * from tbl_bookdetails where bookname='$Book'";
	$c5=mysqli_query($con,$q5);
	$r5=mysqli_fetch_array($c5);
	$Price=$r5['mrp'];
	$Desc=$r5['description'];
	$Img=$r5['bookimg'];
	$q="insert into tbl_deal values('','$Book','$Sender','$Receiver','$Price','$Desc','$Img','No','-')";
	$c=mysqli_query($con,$q);
	if ($c)
	{
		?>
		<script>
			alert("Deal Added.");
			window.location=("deal.php");
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("Something went wrong.");
			window.location=("bookview.php?book=<?php echo $Book ?>");
		</script>
		<?php
	}
?>