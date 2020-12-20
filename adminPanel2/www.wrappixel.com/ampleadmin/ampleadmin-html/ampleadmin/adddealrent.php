<?php
	include 'header.php';
	$Book=$_REQUEST['book'];
	$Sender=$_REQUEST['sender'];
	$Receiver=$_REQUEST['receiver'];
	
	$q5="select * from tbl_bookdetails where bookname='$Book'";
	$c5=mysqli_query($con,$q5);
	$r5=mysqli_fetch_array($c5);
	if (isset($_POST['submit']))
	{
	$returnDate=$_POST['rdate'];
	$Price=$r5['mrp'];
	$Desc=$r5['description'];
	$Img=$r5['bookimg'];
	$q001="insert into tbl_deal values('','$Book','$Sender','$Receiver','$Price','$Desc','$Img','Yes','$returnDate')";
	$c001=mysqli_query($con,$q001);
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
		}
?>
<div class="page-wrapper">

<div class="page-content container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                
                <div class="row">
                    <div class="col-12">
                        <div class="card" style="width: 70%;margin-left: auto;margin-right: auto;">
                           
                            <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                                <div class="card-body">
                                   
                                    <div class="form-group row">
                                    	<pre>				     </pre><h4 class="card-title" style="line-height: 35px">Select return date</h4><pre>  </pre>
                                    <div class="form-group">
                                        <input type="date" name="rdate" class="form-control" >
                                    </div>
                                    </div>
                                    
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div class="form-group mb-0 text-right">
                                        <button type="submit" name="submit" class="btn btn-info waves-effect waves-light">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
	include 'footer.php';
?>